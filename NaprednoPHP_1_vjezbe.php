<?php

class Osoba{
    public string $ime;

    public function setIme(string $ime) 
    {
        $this->ime = $ime;
    }

    public function getIme() 
    {
        echo "Ime: $this->ime \n";
    }
}


$osoba = new Osoba();
$osoba->setIme('Morena');
$osoba1 = new Osoba();
$osoba1->setIme('Ena');
$osoba2 = new Osoba();
$osoba2->setIme('Borna');

$osoba->getIme();
$osoba1->getIme();
$osoba2->getIme();

