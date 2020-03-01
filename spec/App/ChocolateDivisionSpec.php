<?php

namespace spec\App;

use App\ChocolateDivision;
use PhpSpec\ObjectBehavior;

class ChocolateDivisionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ChocolateDivision::class);
    }

    function it_can_calculate_ways()
    {
        $this->countWay([1, 2, 1, 3, 2],3,2)->shouldReturn(2);

    }

    // function it_can_find_sum_of_given_consecitive_item()
    // {
    //     $this->findSum([1,2,3,4,5],2,3)->shouldReturn(12);
    // }

    // function it_can_find_sum_of_given_consecitive_item_2()
    // {
    //     $this->findSum([1 ,2, 1, 3, 2],2,3)->shouldReturn(7);
    // }

    // for each bird bind out there type ind for each type count number 

    // for each bird 
        // is it type 1 ? [++,] go to next bird 
        // is it type 2 ? [ 1, ++, ]
        // [type1count,type2Count,type3count]



}
