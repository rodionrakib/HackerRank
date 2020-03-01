<?php 

namespace App;

/**
 * 
 */
class ExamScore 

	{
	function __construct()
	{

	}

	public function getScore($number)
		{
			if($number < 38 ) return $number;

			// bonus point 
			if($number % 5 >= 3 )
			{
				$number = $number + ( 5 - ($number % 5 ));
				return $number;
			}

			return $number;
		}
}