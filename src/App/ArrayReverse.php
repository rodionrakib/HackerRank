<?php 
namespace App;
/**
 * 
 */
class ArrayReverse 
{
	
	function __construct()
	{
		
	}

	function reverse($array)
	{
		$length =  count($array);

		if ($length == 1) {
			return $array;
		}

		for ($i=0; $i < $length/2 ; $i++)
		{ 
			$array =$this->rotate($array,$i,$length-($i+1));
		}
		return $array;
		
		
	}

	function rotate($arr,$i,$j)
	{
		

		$temp = $arr[$i] ;
		$arr[$i] = $arr[$j];
		$arr[$j] = $temp;
		return $arr; 	
	}
}