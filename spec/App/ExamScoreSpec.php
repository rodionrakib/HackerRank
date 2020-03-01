<?php

namespace spec\App;

use App\ExamScore;
use PhpSpec\ObjectBehavior;

class ExamScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ExamScore::class);
    }

    function it_dont_add_extra_number_for_less_than_38()
    {
    	$this->getScore(32)->shouldReturn(32);
    }

    function it_add_extra_points_if_diif_less_than_2()
    {
    	$this->getScore(43)->shouldReturn(45);
    }

     function it_dontadd_extra_points_if_diif_less_than_3()
    {
    	$this->getScore(42)->shouldReturn(42);
    }

    function it_returns_40_for_38()
    {
    	$this->getScore(38)->shouldReturn(40);
    }
}
