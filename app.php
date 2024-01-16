<?php

require __DIR__ . '/vendor/autoload.php';
$databaseConfig = require __DIR__ . '/config/database.php';

var_dump($databaseConfig);
//die();

try{
    $connection = new mysqli(
        username: $databaseConfig['username'],
        password: $databaseConfig['password'],
        database: $databaseConfig['database']
    );
 } catch (mysqli_sql_exception) {
    echo 'Connection failed!', PHP_EOL;
    return;
 }

 echo 'Connected!', PHP_EOL;
 echo 'SERVER info: ', $connection->server_info, PHP_EOL;

/*$connection = new mysqli(null,'test','dummy','videoteka');
var_dump($connection);
$result = $connection->query('SELECT * FROM zanr');
foreach($result->fetch_all() as $genre){
    echo $genre[1], PHP_EOL;
}
var_dump($result);*/