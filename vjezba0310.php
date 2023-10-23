<?php
    $prime_numbers = [1,3,5,7,11];
    var_dump(isset($prime_numbers[3])); //true
    /*if (isset($prime_numbers[3]) == true)
        {
            echo($prime_numbers[3]);
            echo("\n");
        }
    else
        {
            echo("Treći element ne postoji\n");
        };*/
        echo($prime_numbers[3]); 
        echo("\n");   
        $prime_numbers[] = 6;
        echo(count($prime_numbers));
        echo("\n");

        /*echo($prime_numbers[0]);
        echo("\n");

        echo($prime_numbers[1]);
        echo("\n");

        echo($prime_numbers[2]);
        echo("\n");

        echo($prime_numbers[3]);
        echo("\n");

        echo($prime_numbers[4]);
        echo("\n");

        echo($prime_numbers[5]);
        echo("\n");*/
        var_dump($prime_numbers);

        asort($prime_numbers);

        var_dump($prime_numbers);


    $users = [ 'prviuser' => [
                    'ime' => 'Morena',
                    'prezime' => 'Simcic',
                    'godine' => 33,
                    'spol' => 'Z'
                    ],
               'drugiuser' => [
                    'ime' => 'Valentino',
                    'prezime' => 'Simcic',
                    'godine' => 29,
                    'spol' => 'M'
                    ]
             ];

    var_dump($users);
    unset($users['prviuser']['spol']);
    unset($users['drugiuser']['spol']);
    var_dump($users);
    //$treci_korisnik = ['ime' => 'novoime', 'prezime' => 'novoprezime', 'godine' => 'novegodine'];
    //array_push($users,$treci_korisnik);
    $users ['treci_korisnik'] = ['ime' => 'novoime', 'prezime' => 'novoprezime', 'godine' => 'novegodine'];
    var_dump($users);
?>


