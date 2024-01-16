<?php

//fja vraca broj znakova
function char_cnt($in_word) {
    return strlen($in_word);
}

//fja vraca broj samoglasnika
function vow_cnt($in_letter) {
    $cnt = 0;
    switch(strtolower($in_letter))
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
}

//fja vraca broj suglasnika
function con_cnt($in_letter) {
    $cnt = 0;
    switch(strtolower($in_letter))
    {
        case 'a': break;
        case 'e': break;
        case 'i': break;
        case 'o': break;
        case 'u': break;
        default: $cnt += 1;
    };
}    

//kontrola je li napunjena post varijabla:
if (empty($_POST)){
    echo('Nema podataka za obradu!');
    die();
}

//upisanu rijec dodajemo u json:
$wordsjson = file_get_contents('words.json');
$words = json_decode($wordsjson, true);        
$words[] = ["word" => $_POST['word'],
            "char_cnt" => char_cnt($_POST['word']),
            "vow_cnt" => vow_cnt($_POST['word']),
            "con_cnt" => con_cnt($_POST['word'])];
$wordsjson = json_encode($words);
file_put_contents(__DIR__.'/words.json',$wordsjson); 
?>