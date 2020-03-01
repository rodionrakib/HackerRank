<?php

namespace spec\App;

use App\NumberConverter;
use PhpSpec\ObjectBehavior;

class NumberConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NumberConverter::class);
    }

    // try this with recursion 

    // function it_convert_decimal_to_binary()
    // {
    //     $this->convert(439)->shouldReturn(3);
    // }

    function it_can_count_max_consecutive_110111()
    {
        $this->count([1,1,0,1,0,0,1,1,1,0,0,1,1])->shouldReturn(3);
    }

    
    function it_can_count_max_consecutive_1()
    {
        $this->count([1])->shouldReturn(1);
    }

    function it_can_count_max_consecutive_0()
    {
        $this->count([0])->shouldReturn(0);
    }

    function it_can_count_max_consecutive_11()
    {
        $this->count([1,1])->shouldReturn(2);
    }

    function it_can_count_max_consecutive_110()
    {
        $this->count([1,1,0])->shouldReturn(2);
    }
    function it_can_count_max_consecutive_1100111()
    {
        $this->count([1,1,0,0,1,1,1])->shouldReturn(3);
    }

    function it_can_count_max_consecutive_11001()
    {
        $this->count([1,1,0,0,1])->shouldReturn(2);
    }


}
