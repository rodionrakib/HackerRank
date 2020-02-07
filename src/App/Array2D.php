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
}
