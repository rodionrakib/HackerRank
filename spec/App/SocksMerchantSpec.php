<?php

namespace spec\App;

use App\SocksMerchant;
use PhpSpec\ObjectBehavior;

class SocksMerchantSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SocksMerchant::class);
    }


    function it_can_count_in_kye_value_pair()
    {
        $this->socksCount([1,1,2,2,2,5])->shouldReturn([
            '1' => 2, 
            '2' => 3,
            '5' => 1    
        ]);
    }

    function it_can_count_pair()
    {
        $result = $this->socksCount([10, 20, 20, 10, 10, 30, 50, 10, 20]);
        $this->pairCount($result)->shouldReturn(3);
    }
}
