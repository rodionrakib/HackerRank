<?php

namespace App;

class SocksMerchant
{
    public function socksCount($socks)
    {
        $results = [];
        for ($i=0; $i < count($socks) ; $i++) { 
            if(!array_key_exists($socks[$i],$results))
            {
                $results[$socks[$i]] = 1;
            }
            else{
                $results[$socks[$i]] += 1;
            }

          
        }
        return $results;
    }

    public function pairCount($results)
    {
        $pairSum = 0;
        foreach($results as $num) { 
            $pairSum +=  (int)($num/2);         
        }

        return $pairSum;
    }
}
