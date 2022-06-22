<?php

namespace DesignPatterns\Decorator\StarBuzz;


class Soy extends CondimentDecorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost(): float
    {
        return 0.20 + $this->beverage->cost();
    }
}