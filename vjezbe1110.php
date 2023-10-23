
<html lang="hr">
<head> 
        <meta:charset="UTF-8">      
        <meta:name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Polaznici</title>   
        <style>
            table, tr, th, td {
                border: 1px solid black}
        </style>     
    </head> 
    <body>
        <table>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>            
        </tr>
          
            <?php
                $polaznicijson = file_get_contents('polaznici.json');
                //print_r($polaznicijson);
                $polaznici = json_decode($polaznicijson,true);
                //print_r($polaznicijson);
                foreach($polaznici as $polaznik) {
            ?>
                <tr>
                    <td> <?php echo $polaznik['ime']; ?> </td>    
                    <td> <?php echo $polaznik['prezime']; ?> </td>    
                    <td> <?php echo $polaznik['godine']; ?> </td>    
                    <td> <?php echo $polaznik['email']; ?> </td>    
                    <td> <?php echo $polaznik['telefon']; ?> </td>                                                                
                </tr>
            <?php    
            }
            /*$polaznici[] = [
                "ime" => "Morena",
                "prezime" => "Simcic",
                "godine" => "33",
                "email" => "mail.mail@gmail.com",
                "telefon" => "38595999666"
            ];
            $polaznicijson = json_encode($polaznici);
            file_put_contents(__DIR__.'/polaznici.json',$polaznicijson); */   
        ?>
    </body>
</html>


