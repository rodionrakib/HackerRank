<?php

namespace spec\App;

use App\Tennis;
use PhpSpec\ObjectBehavior;
use App\Player;

class TennisSpec extends ObjectBehavior
{
	public $john;
	public $jane;
	function let()
	{
		$this->john = new Player('John Doe',0);
		$this->jane = new Player('Jane Doe',0);

		$this->beConstructedWith($this->john,$this->jane);
	}
   

    function it_can_calculate_pointless_game()
    {
    	$this->score()->shouldReturn("Love-All");
    }

    function it_can_score_1_0_game()
    {
    	$this->john->point(1);
    	$this->score()->shouldReturn("Fifteen-Love");
    }

    function it_can_score_2_0_game()
    {
    	$this->john->point(2);
    	$this->score()->shouldReturn("Thirteen-Love");
    }
}
