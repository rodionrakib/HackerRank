<?php

namespace App;

class BirdCounter
{
    public function count($birds)
    {
        $result = [0,0,0,0,0];
        for ($i=0; $i < count($birds) ; $i++) 
        { 
            
            for($type = 1 ; $type <= 5 ; $type++)
            {
                if($birds[$i] == $type)
                {
                    $result[$type -1] += 1;
                    break;
                }
            }
        }

        return $result;
    }

    public function findMaxNumberOfLowerType($results)
    {
        $maxs = array_keys($results, max($results));
        return min($maxs) + 1 ; // returning index need to add +1
        
    }
}
