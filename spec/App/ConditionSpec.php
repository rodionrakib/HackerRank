<?php

namespace spec\App;

use App\Condition;
use PhpSpec\ObjectBehavior;

class ConditionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Condition::class);
    }

    function it_returns_weird_for_odd()
    {
        $this->apply(7)->shouldReturn("Weird");
    }
    function it_returns_two_and_four_is_not_weired()
    {
        $this->apply(2)->shouldReturn('Not Weired');
        $this->apply(4)->shouldReturn('Not Weired');
    }

    function it_return_5_weired()
    {
        $this->apply(6)->shouldReturn('Weired');
    }

    function it_returns_even_and_6_to_10_weired()
    {
        $this->apply(6)->shouldReturn('Weired');
    }

    function it_return_26_not_weired()
    {
        $this->apply(26)->shouldReturn('Not Weired');
    }
}
