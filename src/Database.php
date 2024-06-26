<?php

declare(strict_types=1);

namespace App;

use App\Exception\ConfigurationException;
use App\Exception\StorageException;
use Exception;
use PDO;
use PDOException;
use Throwable;

class Database 
{
    private PDO $conn;
    public function __construct(array $config)
    {
        try {
            $this -> validateConfig($config);
            $this->createConnection($config);
            // $connection = new PDO('jkjjnjnjj');
        } catch(PDOException $e) {
            throw new StorageException('Problem z połączeniem do bazy!');
        }
    }
    public function createNote(array $data) : void 
    {
        try {
            $title = $this->conn->quote($data['title']);
            $description = $this->conn->quote($data['description']);
            $created = date('Y-m-d H:i:s');
            $query = "INSERT INTO notes(title,description,created) VALUES($title, $description, '$created')";
            $result = $this->conn->exec($query);
        }   catch (Throwable $e) {
            throw new StorageException('Nie udało się stworzyć nowej notatki', 400, $e);
        }
    }
    public function getNotes() : array 
    {
        try {
            $note = [];
            $query = 'SELECT id, title, created FROM notes';

            $result = $this->conn->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }  catch(Throwable $e){
            throw new StorageException('Nie udało się pobrać danych o notatce');
        } 
    }

    public function getNote(int $id) : array 
    {
        try {
            $query = "SELECT * FROM notes WHERE id=$id";
            $result = $this->conn->query($query);
            $note = $result->fetch(PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się pobrać notatki', 400, $e);
        }
        if (!$note) {
            throw new NotFoundException('Notatka o id: $id nie istnieje.');
        }

        return $note;
    }

    public function editNote(int $id, array $data) : void 
    {
        try {
            $title = $this->conn->quote($data['title']);
            $description = $this->conn->quote($data['description']);
            $query = "UPDATE notes SET title=$title, description=$description WHERE id=$id";

            $this->conn->exec($query);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się edytować notatki', 400, $e);
        }
    }

    private function createConnection(array $config): void{
        $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
            $this->conn = new PDO(
                $dsn,
                $config['user'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
    }
    private function validateConfig(array $config) : void
    {
        if (empty($config['database']) || empty($config['user']) || empty($config['host'])) {
            throw new ConfigurationException("Problem z konfiguracją bazy - skontaktuj się z administratorem");
        }
    }
}

