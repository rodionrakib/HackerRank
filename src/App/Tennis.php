<?php 

namespace App;

use App\Player;

/**
 * 
 */
class Tennis 
{
	
	public $player1;
	public $player2;

	function __construct(Player $player1,Player $player2)
	{
		$this->player1 = $player1;
		$this->player2 = $player2;
	}

	public function score()
	{
		 if($this->player1->score == 0 &&  $this->player2->score == 0)
		 {
		 	return "Love-All";
		 }



		 if($this->player1->score == 1 &&  $this->player2->score == 0)
		 {
		 	return "Fifteen-Love";
		 }  


		 if($this->player1->score == 2 &&  $this->player2->score == 0)
		 {
		 	return "Thirteen-Love";
		 }  
	}
}