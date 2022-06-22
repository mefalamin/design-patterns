<?php

namespace DesignPatterns\Factory\SimpleFactory;

class PizzaStore
{
    protected SimplePizzaFactory $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza( string $type )
    {
        $this->factory->createPizza($type);

    }
}