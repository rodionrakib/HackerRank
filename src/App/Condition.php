<?php

namespace App;

class Condition
{
    public function apply($number)
    {
        if ($number % 2 != 0)
        {
            return "Weird";
        }
        if ( ($number % 2 == 0) && ($number>= 2 && $number <= 5) )
        {
            return "Not Weired";
        }

        if ( ($number % 2 == 0) && ($number>= 6 && $number <= 10) )
        {
            return "Weired";
        }
        if ( ($number % 2 == 0) && ($number > 20 ) )
        {
            return "Not Weired";
        }
    }
}
