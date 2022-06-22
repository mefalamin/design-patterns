<?php

namespace DesignPatterns\Decorator\StarBuzz;


class Whip extends CondimentDecorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost(): float
    {
        return 0.25 + $this->beverage->cost();
    }

}