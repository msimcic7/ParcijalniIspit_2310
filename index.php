<?php

use App\config;
use App\connection;

define('ROOT',realpath(__DIR__.'/..'));
require __DIR__.'vendor/autoload.php';

$dbConfigFile = require __DIR__.'/config/database.php';

$dbconfig = new config (
    $dbConfigFile['database'],
    $dbConfigFile['username'],
    $dbConfigFile['password']
);

try {
    $connection = connection::getInstance($databaseConfiguration);
} catch (\Throwable $th) {
    echo 'Connection failed!', PHP_EOL;
    return;
}
