<?php

namespace Circle;

use circle\circle_konst;

class Circle 
{    
    //konstruktor:
    public function promjer (float $polumjer)
    {
        return 2*$polumjer;
    }

    public function opseg(float $polumjer) 
    {
        return 2 * $polumjer * pi;
    }

    public function povrsina(float $polumjer) 
    {
        return $polumjer * $polumjer * pi;
    }
}