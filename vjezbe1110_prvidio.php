 <?php   
    /*echo("Treca vjezba, zadatak 1:"."\n");
    function fja3($number){
        static $suma = 0;
        $suma = $suma + $number;
        return $suma;
    }

    echo fja3(3);
    echo "\n";
    echo fja3(5);
    echo "\n";
    echo fja3(2);*/


    /*echo("Treca vjezba, zadatak 2:"."\n");
    function drugafja($br){
        echo "$br\n";
    }
    $fja = 'drugafja';
    $fja(random_int(1,10));
    $fja(random_int(1,10));
    $fja(random_int(1,10));
    $fja(random_int(1,10));
    $fja(random_int(1,10));*/

    /*echo("Vjezba datoteke:"."\n");
    $polaznici[] = [
        "ime" => "Ivan",
        "prezime" => "Horvat",
        "godine" => "35",
        "email" => "ivan.horvat@gmail.com",
        "telefon" => "38591222333"
    ];
    $polaznicijson = json_encode($polaznici);
    file_put_contents(__DIR__.'/polaznici.json',$polaznicijson);

    $polaznici[] = [
        "ime" => "Ana",
        "prezime" => "Mišak",
        "godine" => "25",
        "email" => "ana.misak@gmail.com",
        "telefon" => "38592333444"
    ];
    $polaznicijson = json_encode($polaznici);
    file_put_contents(__DIR__.'/polaznici.json',$polaznicijson);

    $polaznici[] = [
        "ime" => "Kristina",
        "prezime" => "Kristić",
        "godine" => "31",
        "email" => "kristina.kristic@gmail.com",
        "telefon" => "38598444555"
    ];
    $polaznicijson = json_encode($polaznici);
    file_put_contents(__DIR__.'/polaznici.json',$polaznicijson);

    $polaznici[] = [
        "ime" => "Mirko",
        "prezime" => "Mirkan",
        "godine" => "45",
        "email" => "mirko.mirkan@gmail.com",
        "telefon" => "38599555666"
    ];    
    $polaznicijson = json_encode($polaznici);
    file_put_contents(__DIR__.'/polaznici.json',$polaznicijson);*/

    //naknadno dodajemo:    
    $polaznicijson = file_get_contents('polaznici.json');
    $polaznici = json_decode($polaznicijson,true);  
    $polaznici[] = [
        "ime" => "Morena",
        "prezime" => "Simcic",
        "godine" => "33",
        "email" => "mail.mail@gmail.com",
        "telefon" => "38595999666"        
    ];
    $polaznicijson = json_encode($polaznici);
    file_put_contents(__DIR__.'/polaznici.json',$polaznicijson);
?>