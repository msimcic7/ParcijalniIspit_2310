<?php

namespace App;

class Config {
    public function __construct(private string $username, private string $password, private string $database)
    {
    }
    
    public function getUsername()
    {  
        return $this -> username;
    }

    public function getPassword()
    {  
        return $this -> password;
    }    

    public function getDatabase()
    {  
        return $this -> database;
    }       
}
