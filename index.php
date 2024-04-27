<?php

declare(strict_types=1);

namespace App;


require_once('./src/View.php');
include_once('./src/utils/debug.php');


const DEFAULT_ACTION = 'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$viewParams = [];

if($action === 'create') {
    $page = 'create';
    $viewParams['resultCreate'] = 'Udało się stworzyć notatkę';
} else {
    $page = 'list';
    $viewParams['resultList'] = 'Wyświetlamy nową notatkę';
}

$view = new View();
$view -> render($page, $viewParams);

?>

