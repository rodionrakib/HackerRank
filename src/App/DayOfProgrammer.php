<?php

namespace App;

class DayOfProgrammer
{
    public $months = [31,28,31,30,31,30,31,31,30,31,30,31];
    // it can conert day number to month and day
   public function calculateDate($dayNumber)
   {
       $reult = [0,0];
        // (day/month format)
        


        $totalMonthDays = 0;
        $previoudMonthTotalDays = 0;

        for($i = 0 ; $i < count($this->months); $i++ )
        {

            if($dayNumber <=  $totalMonthDays)
            {
                $reult[0] = $dayNumber - $previoudMonthTotalDays ;
                $reult[1] = $i;
                return $reult;
            }
            $previoudMonthTotalDays = $totalMonthDays;
            $totalMonthDays = $totalMonthDays+$this->months[$i];
        }
   }

    public function isLeapYearJulian($year)
    {
        return $year % 4 == 0 ; 
    }

    public function isLeapYearGeorgian($year)
    {
        if($year % 400 == 0 ) return true;
        if($year % 4 == 0 && $year % 100 != 0) return true;
        return false;
    }

    public function findDate($year)
    {
        $result = "";

        if($year >= 1700 & $year <= 1917)
        {
            if($this->isLeapYearJulian($year))
            {
                    $this->months[1] = 29;
                    $date = $this->calculateDate(256);
                    $result = $date[0]+":"+$date[1]+":"+$year;
            }
        }

        else if($year >= 1919 & $year <= 2700)
        {
            if($this->isLeapYearGeorgian($year))
            {
                    $this->months[1] = 29;
                    $date = $this->calculateDate(256);
                    $result = $date[0]+":"+$date[1]+":"+$year;
            }
        }
        else if ($year == 1918)
        {

        }

        return $result;
    }

    public function findDate1918($dayNumber)
    {
        $result = [0,0];
        // (day/month format)
        


        $totalMonthDays = 0;
        $previoudMonthTotalDays = 0;

        for($i = 0 ; $i < count($this->months); $i++ )
        {

            if($dayNumber <=  $totalMonthDays)
            {
                $result[0] = $dayNumber - $previoudMonthTotalDays ;
                $result[1] = $i;
                print_r($result);
                return $result;
            }
            $previoudMonthTotalDays = $totalMonthDays;
            $totalMonthDays = $totalMonthDays+$this->months[$i];
        }
       

    }

}
