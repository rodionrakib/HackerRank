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

    public function rotateLeft($array,$by)
    {
        $result = [];
        $rightPart = [];
        for ($j = 0 ; $j < $by ; $j++ )
        {
            $rightPart[$j] = $array[$j];
        }

        // copy the left portion and merge it
        $i = 0;
        for ($index = $by ;$index < count($array)  ; $index++ )
        {
            $result[$i++] = $array[$index];
        }
        $result = array_merge($result,$rightPart);
        ;
        return $result;
    }

    public function copyRigtPortion($array,$by)
    {
        $result = [];
        $rightPart = [];
        for ($j = 0 ; $j < $by ; $j++ )
        {
            $rightPart[$j] = $array[$j];
        }

        $i = 0;
        for ($index = $by ;$index < count($array)  ; $index++ )
        {
            $result[$i++] = $array[$index];
        }
        $result = array_merge($result,$rightPart);
        return $result;
    }
}
