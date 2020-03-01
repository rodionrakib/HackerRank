<?php

namespace spec\App;

use App\RecordCounter;
use PhpSpec\ObjectBehavior;

class RecordCounterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RecordCounter::class);
    }

    function it_return_0_for_single_point()
    {
        $this->breakCount([5])->shouldReturn([0,0]);
    }

    function it_count_result_for_2_scores()
    {
        $this->breakCount([5,7])->shouldReturn([1,0]);
    }
    function it_count_result_for_2_scores_1()
    {
        $this->breakCount([7,5])->shouldReturn([0,1]);
    }

    function it_count_result_for_3_scores_1()
    {
        $this->breakCount([5,7,10])->shouldReturn([2,0]);
    }
    function it_count_result_for_3_scores_2()
    {
        $this->breakCount([10,20,14])->shouldReturn([1,0]);
    }
}
