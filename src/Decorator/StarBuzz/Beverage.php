<?php

namespace DesignPatterns\Decorator\StarBuzz;

abstract class Beverage
{
    protected string $description = 'Unknown description';

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;
}