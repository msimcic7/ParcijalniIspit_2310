<?php
    echo("Prva vjezba:"."\n");
    echo("Prvi zadatak:"."\n");
    $i = 1;
    while ($i<=10){
        echo($i."\n");
        $i++;
    }
    echo("Drugi zadatak:"."\n");
    for ($i=1; $i<=100; $i++){
        if($i%2==0){
            echo($i."\n");
        }
    }

    echo("Druga vjezba:"."\n");
    $names = ["Ana", "Ivan", "Marko", "Tea", "Marija"];
    foreach($names as $key => $name) {
        echo ("Ključ: " . $key . " Vrijednost: " . $name . "\n");
    }
?>


