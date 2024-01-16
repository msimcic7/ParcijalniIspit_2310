<?php

class Automobil
{
    public function __construct(
        protected string $sasija, 
        protected string $model,
        protected string $proizvodac
        ) 
    {}

    public function __destruct()
    {
        echo "Automobil se odvozi na reciklazu\n";
    }

    public function printInfo() 
    {
        echo "Sasija: {$this->sasija}, model: {$this->model}, proizvodjac: {$this->proizvodac} \n";
    }

}



$auto = new Automobil('neka sasija', 'neki model', 'neki proizvodjac');


$auto->printInfo();