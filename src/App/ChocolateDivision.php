<?php

namespace App;

class ChocolateDivision
{
    // given array denoting number on rach chocolate bar 
    // month of birthday --> length of chocolate share  
    // day of birth day  --> sum of length to share 

    // [2,4,1,5,7,3,4,2,1,2,4]
    // 3 month 7 days 

    // take three piece and sum must be 8
    
    // length - (1+month)

    public function findSum($array, $startIndex, $length)
    {
        $total = 0;
        for ($i=0; $i < $length ; $i++) { 
            $total += $array[$startIndex+$i];
        }
        return $total;
    }


    public function countWay($array, $bd,$bm)
    {
        $possibleWay = 0;

        for ( $i=0 ; $i <= count($array) - $bm ; $i++) { 
            if($this->findSum($array,$i,$bm) == $bd) $possibleWay++;
        }
        return $possibleWay;
    }

}
