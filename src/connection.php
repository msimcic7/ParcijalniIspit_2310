<?php

namespace App;

class Connection{
    private static ?connection $instance = null;

    private function __construct(private Config $config)
    {
        return new \PDO(
            'mysql:dbname='.$config -> getDatabase(),
            username: $config -> getUsername(),
            password: $config -> getPassword()
        );
        
    }

    public static function getInstance(Config $config): connection
    {
        if (self::$instance === null){
            self::$instance = new connection($config);        
        }
        return self::$instance;
    }
}