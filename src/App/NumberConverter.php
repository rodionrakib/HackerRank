<?php

namespace App;

class NumberConverter
{
    public function convert($number)
    {
       $count = 0;
       $maxCount = 0;
        while($number > 0)
        {
            $reminder = $number % 2;
            
            if($reminder == 1)
            {
              
                $count++;
                $maxCount = $count;
                if($count > $maxCount)
                {
                    $maxCount = $count;
                }
            }
            else{
                $maxCount = $count;
                $count = 0;
            }
            $number = (int)($number/2);
        }
        // devide the number by two 
        // ad the reminder  to result 
        // repeat unless number become 0 or less
        return $maxCount; 
    }

    public function count($numbers)
    {
        $countOfOne = 0;
        $maxCount = 0;


        for ($i=0; $i < count($numbers) ; $i++) { 

            if($numbers[$i] == 1) 
          
            {
                $countOfOne++;
                $maxCount = max($countOfOne,$maxCount);
               
            }
            else {
              $countOfOne = 0;
            }

        }

        return $maxCount;

        
        
    }
}
