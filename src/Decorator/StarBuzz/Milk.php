<?php

namespace DesignPatterns\Decorator\StarBuzz;


class Milk extends CondimentDecorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Milk';
    }

    public function cost(): float
    {
        return .15 + $this->beverage->cost();
    }
}