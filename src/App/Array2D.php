<?php

namespace App;

class Array2D
{
    public function findWhereToStart($array)
    {
        if(!array_key_exists(1, $array))
        {
        	return 0;
        }
        
        return [1,1];
    }

    public function isValidCell($x,$y,$array)
    {
    	if( $y == 0 || $x == 0 
    		|| $y  > (count($array) -2 ) 
    		|| $x  > (count($array) -2 ) )
    	{
    		return false;
    	}
    	return true;
    }

    public function findValueOfCell($row,$col,$array)
    {
        if($this->isValidCell($row,$col,$array))
        {
            return
                $array[$row][$col]
                + $array[$row-1][$col-1]
                + $array[$row-1][$col]
                + $array[$row-1][$col+1]
                + $array[$row+1][$col+1]
                + $array[$row+1][$col]
                +$array[$row+1][$col-1];

        }

    }
    public function findHourGlassSums($array)
    {
        $sums = [];


        for ($i = 0 ; $i < count($array); $i++ )
        {
            for ($j = 0 ; $j <  count( $array[$i]) ; $j++ )
            {
                if ($this->isValidCell($i,$j,$array))
                {
                    $sums[] = $this->findValueOfCell($i,$j,$array);
                }

            }
        }
      ;
        return $sums;
    }

    public function findMaxValue($array)
    {

        $max = $array[0];
        for ($i = 1 ; $i < count($array);$i++)
        {
            if ($array[$i] > $max)
                $max = $array[$i];
        }
        return $max;
    }
}
