<?php

namespace spec\App;

use App\Array2D;
use PhpSpec\ObjectBehavior;

class Array2DSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Array2D::class);
    }

    function it_can_find_the_location_where_to_start()
    {
    	$array2d = [
    		[2,4,6,1],
    		[1,5,3,9],
    		[9,3,1,6],
    		[8,2,4,5]
    	];

    	$this->findWhereToStart($array2d)->shouldReturn([1,1]);

    }

    function it_can_find_valid_cell()
    {
    	$array2d = [
    		[2,4,6,1],
    		[1,5,3,9],
    		[9,3,1,6],
    		[8,2,4,5]
    	];

    	// $this->isValidCell(1,2)->shouldReturn(true);
    	$this->isValidCell(0,2,$array2d)->shouldReturn(false);
    	$this->isValidCell(1,3,$array2d)->shouldReturn(false);
    	$this->isValidCell(3,3,$array2d)->shouldReturn(false);
    	$this->isValidCell(0,1,$array2d)->shouldReturn(false);
    	$this->isValidCell(2,3,$array2d)->shouldReturn(false);
    	$this->isValidCell(2,2,$array2d)->shouldReturn(true);




    }

}
