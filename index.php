<?php

declare(strict_types=1);

namespace App;


require_once('./src/Controller.php');
include_once('./src/utils/debug.php');

$controller = new Controller($_GET, $_POST);
$controller->run();

?>

