<?php

namespace App;

class ArrayLeftRotate
{
    public function rotateLeftByOne($array)
    {
        $firstItem = $array[0];
        $lastIndex = count($array) - 1;
        for ($i = 0 ; $i<= $lastIndex -1 ;$i++)
        {
            $array[$i] = $array[$i+1];
        }
        $array[count($array) -1] = $firstItem;
        return $array;
    }
}
