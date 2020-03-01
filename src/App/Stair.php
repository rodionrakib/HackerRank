<?php 

namespace App;

/**
 * Stair
 */
class Stair 
{
	public $size;
	
	function __construct($size)
	{
		$this->size = $size;	
	}

	public function print()
	{
		$this->printLine(1);
	}

	public function printLine($line)
	{
		$ans ="";

		for ($i = 0 ; $i < $this->size ; $i++) { 

			$i >= $this->size - $line ? $ans .= "#": $ans .= "*";

		}
		return $ans;
		
		
	}
}