<?php

namespace spec\App;

use App\DayOfProgrammer;
use PhpSpec\ObjectBehavior;

class DayOfProgrammerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DayOfProgrammer::class);
    }

    function it_returns_1_1_of_1()
    {
       
        $this->calculateDate(1)->shouldReturn([1,1]);
    }

  

    function it_returns_1_2_of_31()
    {
       
        $this->calculateDate(31)->shouldReturn([31,1]);
    }

    // function it_returns_1_2_of_40()
    // {
       
    //     $this->calculateDate(39)->shouldReturn([8,2]);
    // }

    
    function it_returns_for_march()
    {
       
        $this->calculateDate(64)->shouldReturn([5,3]);
    }

    function it_returns_for_march_end()
    {
       
        $this->calculateDate(90)->shouldReturn([31,3]);
    }


    function it_returns_for_april_first()
    {
       
        $this->calculateDate(120)->shouldReturn([30,4]);
    }

    function it_returns_for_april_first_find_256_th_day_of_regular_year()
    {
        $this->calculateDate(256)->shouldReturn([13,9]);
    }


    function it_can_find_leapyear_of_julian()
    {
        $this->isLeapYearJulian(2011)->shouldReturn(false);      
    }


    function it_can_find_leapyear_of_julian1996()
    {
        $this->isLeapYearJulian(1996)->shouldReturn(true);      
    }

    function it_can_find_leapyear_of_georgian()
    {
        $this->isLeapYearGeorgian(2000)->shouldReturn(true);      
    }

    function it_can_find_leapyear_of_georgian2()
    {
        $this->isLeapYearGeorgian(1900)->shouldReturn(false);      
    }

    function it_can_find_256_day_from1700_to1917()
    {
        $this->findDate(1700);
    }

    function it_can_find_dayte_of_1918()
    {
        $this->findDate1918(32)->shouldReturn([14,2]);
    }
   
}
