<?php
define('APP_PATH', __DIR__ . '/../App/');
$app = require_once APP_PATH.'/app.php';
$response = $app->start();
echo $response;