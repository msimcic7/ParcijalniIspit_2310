<?php
    setlocale(LC_ALL,'croatian'); 
    //$a = 5;
    $a = 15;
    $b = 10;
    //$c = 15;
    $c = 5;
    if (($a<$b and $b<$c) or ($c<$b and $b<$a)) //ili ovaj drugi dio staviti u elsif
        {
            echo("b je između a i c");
        }
    else    
        {
            echo("b nije između a i c");
        }
    echo("\n\n");
    $dan = date("w",time()); //date("l",time());
    switch($dan)
        {
            case 0: echo("Nedjelja");
                    break;
            case 1: echo("Ponedjeljak"); 
                    break;
            case 2: echo("Utorak");
                    break;
            case 3: echo("Srijeda");
                    break;
            case 4: echo("Četvrtak");
                    break;
            case 5: echo("Petak");                             
                    break;
            case 6: echo("Subota");
                    break;
            default: echo("ne znam koji je dan");
        };
?>


