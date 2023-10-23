<?php
    echo("Prva vjezba:"."\n");
    function mojafja(){
        return 'nekitekst';
    }

    $varijabla = mojafja();
    echo $varijabla;

    echo("\n");
    echo("Drugi zadatak:"."\n");
    function drugafja($name, $surname){
        return strtoupper($name.' '.$surname);
    }
    $varijabla2 = drugafja('morena','simcic');
    echo $varijabla2;
?>


