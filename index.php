<!DOCTYPE html>
<html lang="en">

<?php

//fja vraca broj znakova
function char_cnt($in_word) {
    return strlen($in_word);
}

//fja vraca broj samoglasnika
function vow_cnt($in_word) {
    $cnt = 0;
    foreach (str_split($in_word) as $letter){
        switch(strtolower($letter))
        {
            case 'a': $cnt += 1;
                    break;
            case 'e': $cnt += 1;
                    break;
            case 'i': $cnt += 1;
                    break;
            case 'o': $cnt += 1;
                    break;
            case 'u': $cnt += 1;
                    break;
            default: break;
        };
    };
    return $cnt;
}

//fja vraca broj suglasnika
function con_cnt($in_word) {
    $cnt = 0;
    foreach (str_split($in_word) as $letter){
        switch(strtolower($letter))
        {
            case 'a': break;
            case 'e': break;
            case 'i': break;
            case 'o': break;
            case 'u': break;
            default: $cnt += 1;
        };
    }
    return $cnt;
}    
?>

<head> 
        <meta:charset="UTF-8">      
        <meta:name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>   
        <style>
            .nontbl table, th, tr, td {
                border: none;
            }
            .tbl table, th, tr, td{
                border: 1px solid black;
            }
        </style>     
</head> 
<body>
    <table class="nontbl">
        <tr>
            <td>
                <form method="post">
                    <label for="word">Upišite riječ: </label>
                    <input type="text" name="word"/>
                    <br><br>
                    <input type="submit" value="Pošalji"/>
                </form>
            </td>
            <td>
                <table class="tablica">
                    <tr>
                        <th>Riječ</th>
                        <th>Broj slova</th>
                        <th>Broj samoglasnika</th>
                        <th>Broj suglasnika</th>           
                    </tr>
                    <?php
                        //kontrola je li napunjena post varijabla:
                        if (!empty($_POST)){
                            //upisanu rijec dodajemo u json:
                            $wordsjson = file_get_contents('words.json');
                            $words = json_decode($wordsjson, true);        
                            $words[] = ["word" => $_POST['word'],
                                        "char_cnt" => char_cnt($_POST['word']),
                                        "vow_cnt" => vow_cnt($_POST['word']),
                                        "con_cnt" => con_cnt($_POST['word'])];
                            $wordsjson = json_encode($words);
                            file_put_contents(__DIR__.'/words.json',$wordsjson); 
                        }
                        $wordsjson = file_get_contents('words.json');
                        $words = json_decode($wordsjson,true);
                        foreach($words as $word) {
                    ?>
                    <tr>
                        <td> <?php echo $word['word']; ?> </td>    
                        <td> <?php echo $word['char_cnt']; ?> </td>    
                        <td> <?php echo $word['vow_cnt']; ?> </td>    
                        <td> <?php echo $word['con_cnt']; ?> </td>                                                              
                    </tr>
                    <?php
                        }
                    ?>            
                </table>
            </td>
        </tr>
    </table>
</body>
</html>