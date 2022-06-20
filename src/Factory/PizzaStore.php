<?php

namespace DesignPatterns\Factory;

class PizzaStore
{
    protected SimplePizzaFactory $factory;

    public function __construct()
    {
        $this->factory = new SimplePizzaFactory();
    }

    public function orderPizza( string $type )
    {
        $this->factory->createPizza('cheese');

    }
}