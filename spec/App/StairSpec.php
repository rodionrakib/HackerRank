<?php

namespace spec\App;

use App\Stair;
use PhpSpec\ObjectBehavior;

class StairSpec extends ObjectBehavior
{
	function let()
	{
		$size = 5 ;
		$this->beConstructedWith($size);
	}
    

    function it_can_print_first_line()
    {
    	    $this->printLine(1)->shouldReturn("****#");

    }

     function it_can_print_second_line()
    {
    	    $this->printLine(2)->shouldReturn("***##");

    }
    function it_can_print_third_line()
    {
    	    $this->printLine(3)->shouldReturn("**###");

    }
     function it_can_print_4_line()
    {
    	    $this->printLine(4)->shouldReturn("*####");

    }
     function it_can_print_5_line()
    {
    	    $this->printLine(5)->shouldReturn("#####");

    }
}
