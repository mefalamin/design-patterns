<?php

namespace DesignPatterns\Decorator\StarBuzz;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost(): float
    {
        return 0.65;
    }
}