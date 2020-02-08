<?php

namespace spec\App;

use App\ArrayLeftRotate;
use PhpSpec\ObjectBehavior;

class ArrayLeftRotateSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ArrayLeftRotate::class);
    }
}
