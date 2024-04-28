<?php

declare(strict_types=1);

namespace App;


require_once('./src/Controller.php');
include_once('./src/utils/debug.php');

$request = [
    'get' => $_GET,
    'post' => $_POST,
];
$controller = new Controller($request);
$controller->run();

?>

