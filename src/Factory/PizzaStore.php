<?php


namespace DesignPatterns\Factory;


class PizzaStore
{
    protected Pizza $pizza;

    public function orderPizza( string $type )
    {
        if ( $type == 'cheese' )
            $this->pizza = new CheesePizza();
        elseif ( $type == 'greek' )
            $this->pizza = new GreekPizza();
        elseif ( $type == 'pepperoni')
            $this->pizza = new PepperoniPizza();

        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();

    }
}