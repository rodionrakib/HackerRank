<?php

namespace spec\App;

use App\BirdCounter;
use PhpSpec\ObjectBehavior;

class BirdCounterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BirdCounter::class);
    }

    function it_can_count_birds_with_type()
    {
        $birds = [1,4,3,2,4,5,3,2,1];
        $this->count($birds)->shouldReturn([2,2,2,2,1]);

    }

    function it_can_find_type_birds_with_max_number_and_lower_type()
    {
        $birds = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
        $results = $this->count($birds);
        $this->findMaxNumberOfLowerType($results)->shouldReturn(3);

    }

}
