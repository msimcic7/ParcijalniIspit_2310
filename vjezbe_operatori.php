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
    $a = 11;
    $b = 22;
    $c = 'prvi';
    $d = 'drugi';
    echo $a + $b;
    echo "\n";
    echo $a - $b;
    echo "\n";
    echo $a * $b;
    echo "\n";
    echo $a / $b;
    echo "\n";
    echo $a % $b;
    echo "\n";

    $f = $c . $d;
    echo $f;
    echo "\n";
    
    echo $a += $b;
    echo "\n";

    var_dump($a>$b);
    echo "\n";

    echo(++$a);
    echo "\n";

    echo(--$b);
    echo "\n";
    echo($b);
?>

