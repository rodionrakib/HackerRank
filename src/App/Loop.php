<?php

namespace App;

class Loop
{
    protected  $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function multilyBy($by)
    {
        return $this->number * $by;
    }

    public function printNamta()
    {
        for ($i = 1 ; $i <= 10 ; $i++)
        {
            // echo $this->number."x".$i."=".($this->number*$i)."/n";
        }
    }

    
}
