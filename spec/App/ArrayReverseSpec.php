<?php

namespace spec\App;

use App\ArrayReverse;
use PhpSpec\ObjectBehavior;

class ArrayReverseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ArrayReverse::class);
    }

    function it_can_reverse_1_item()
    {
    	$this->reverse([7])->shouldReturn([7]);
    }



     function it_can_reverse_2_items()
    {
    	$this->reverse([2,7])->shouldReturn([7,2]);
    }

    function it_can_reverse_3_items()
    {
    	$this->reverse([2,7,9])->shouldReturn([9,7,2]);
    }

    function it_can_reverse_4_items()
    {
    	$this->reverse([1,2,3,4])->shouldReturn([4,3,2,1]);
    }

    function it_can_reverse_5_items()
    {
    	$this->reverse([1,2,3,4,5])->shouldReturn([5,4,3,2,1]);
    }
      function it_can_reverse_6_items()
    {
    	$this->reverse([1,2,3,4,5,6])->shouldReturn([6,5,4,3,2,1]);
    }

}
