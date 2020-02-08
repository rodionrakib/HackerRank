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

    function it_is_rotate_by_1_offset()
    {
        $array = [1,2,3,4,5];
        $this->rotateLeftByOne($array)->shouldReturn([2,3,4,5,1]);
    }
}
