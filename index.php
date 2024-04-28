<?php

declare(strict_types=1);

namespace App;


require_once('./src/View.php');
include_once('./src/utils/debug.php');


const DEFAULT_ACTION = 'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$viewParams = [];


switch($action) {
    case 'create':
        $page = 'create';
        $created = false;
            if(!empty($_POST)) {
        $viewParams = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
        ];
        $created = true;
        }
        $viewParams['created'] = $created;
        break;
    default: 
        $page = 'list';
        $viewParams['resultList'] = 'Wyświetlamy listę notatek';

}


$view = new View();
$view -> render($page, $viewParams);

?>

