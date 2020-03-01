<?php

namespace App;

class CatMouseCatch
{
    public function measureDistance($catsPosition, $mousePosition)
    {
        return abs($catsPosition - $mousePosition);
    }
}
