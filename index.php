<?php

/*
 * 2
 * Author: Oleg Antipov
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

require __DIR__ . '/core/app.php';

$app = new App();

$app->autoload();

$app->start();

?>