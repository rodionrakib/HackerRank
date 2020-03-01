<?php 
namespace App;
/**
 * 
 */
class ArraySumIndex 
{
	public $array;
	public $sum;
	
	function __construct($array)
	{
		$this->array =  $array;
	}


	public function short($nums)
	{
		for ($i=0; $i < count($nums) - $i; $i++) { 

			if ($nums[$i] > $nums[$i+1] ) 
			{
				$nums = $this->rotate($nums,$i,$i+1);
			}
		}

		
		return $nums;
	}


	function rotate($arr,$i,$j)
	{
		

		$temp = $arr[$i] ;
		$arr[$i] = $arr[$j];
		$arr[$j] = $temp;
		return $arr; 	
	}
}