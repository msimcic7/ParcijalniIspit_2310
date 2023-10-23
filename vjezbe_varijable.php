<?php   
    //require 'prviphp.php'; //ako file ne postoji, dobivamo fatal error 
    //include 'prviphp.php'; //ako file ne postoji, dobit cemo warning, ali ce izvrsiti skriptu
    //include_once 'prviphp.php'; //ako želimo samo jednom uključiti (ako ga stavimo dva puta, drugi put ce generirati fatal error) 
    //requiree_once 'prviphp.php'; //isto kao include_once, ali je nužno da taj file postoji
    //require '';
    //echo time();
    /*$a = $b = foo();
    echo $a, "\n";
    echo $b, "\n";
    function foo()
    {
        return 5;
    }*/
    $a = 10;
    $b = 0.1;
    $c = 'Neki tekst';
    $d = true;
    echo $a;
    echo "\n";
    echo $b;
    echo "\n";
    echo $c;
    echo "\n";
    echo $d;
    echo "\n";

    const pi = 3.14;
    echo pi;
    echo "\n";

    $b = &$a;
    $a = 5;
    echo $b;
    
?>

