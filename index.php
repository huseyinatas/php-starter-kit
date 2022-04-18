<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

$app = new \App\Core\Bootstrap();
$router = $app->router;
require __DIR__ . '/app/routes.php';

$app->run();