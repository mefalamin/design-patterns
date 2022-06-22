<?php

namespace DesignPatterns\Factory\FactoryMethod;

class NYPizzaStore extends PizzaStore
{
    const NY_CHEESE = 'ny_chess';
    const NY_PEPPERONI = 'ny_pepperoni';
    const NY_VEGGIE = 'ny_veggie';

    protected function createPizza(string $type): null | Pizza
    {
        if ( $type == self::NY_CHEESE)
            return new NYCheesePizza();
        elseif ($type == self::NY_PEPPERONI )
            return new NYPepperoniPizza();
        elseif ( $type == self::NY_VEGGIE )
            return new NYVeggiePizza();
        else
            return null;
    }
}