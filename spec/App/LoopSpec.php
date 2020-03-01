<?php

namespace spec\App;

use App\Loop;
use PhpSpec\ObjectBehavior;

class LoopSpec extends ObjectBehavior
{

//    function it_return_2_for_2_1()
//    {
//        $this->beConstructedWith(3);
//        $this->multilyBy(1)->shouldReturn(3);
//    }

    function it_can_show_result()
    {
        $this->beConstructedWith(3);
        $this->printNamta();
    }
}
