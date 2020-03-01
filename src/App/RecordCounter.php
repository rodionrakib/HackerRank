<?php

namespace App;

class RecordCounter
{
    public function breakCount($scores)
    {
        $result = [0,0];
        $currentMax = $currentMin = $scores[0];

        if(count($scores) > 1 )
        {
            for ( $i=1;  $i < count($scores) ;  $i++) { 
                if($scores[$i] > $currentMax)
                {
                    $result[0] += 1 ;
                    $currentMax = $scores[$i];
                }
    
                if($scores[$i] < $currentMin)
                {
                    $result[1] += 1 ;
                    $currentMin = $scores[$i];
                }
            }
        }

       

        return $result;
    }
}
