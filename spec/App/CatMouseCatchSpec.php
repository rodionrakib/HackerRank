<?php

namespace spec\App;

use App\CatMouseCatch;
use PhpSpec\ObjectBehavior;

class CatMouseCatchSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CatMouseCatch::class);
    }

    function it_can_find_distance_form_cat_to_mouse()
    {
        $this->measureDistance(7,4)->shouldReturn(3);
    }
}
