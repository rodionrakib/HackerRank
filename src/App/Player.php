<?php 

namespace App;

/**
 * 
 */
class Player 
{
	public $name;
	public $score;
	
	
	public function __construct($name,$score)
	{
		$this->name = $name;
		$this->score = $score;
	}

	public function point($point)
	{
		$this->score = $point;

	}

	
}