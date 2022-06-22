<?php

namespace DesignPatterns\Factory\FactoryMethod;

class ChicagoPizzaStore extends PizzaStore
{
    const CHICAGO_CHEESE = 'chicago_chess';
    const CHICAGO_PEPPERONI = 'chicago_pepperoni';
    const CHICAGO_VEGGIE = 'chicago_veggie';

    protected function createPizza( string $type): ?Pizza
    {
        if ( $type == self::CHICAGO_CHEESE)
            return new ChicagoCheesePizza();
        elseif ($type == self::CHICAGO_PEPPERONI )
            return new ChicagoPepperoniPizza();
        elseif ( $type == self::CHICAGO_VEGGIE )
            return new ChicagoVeggiePizza();
        else
            return null;
    }


}