<?php

namespace DesignPatterns\Decorator\StarBuzz;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso Coffee';
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function cost(): float
    {
        return .85;
    }
}