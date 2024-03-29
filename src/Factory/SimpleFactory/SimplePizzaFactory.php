<?php
namespace DesignPatterns\Factory\SimpleFactory;


class SimplePizzaFactory
{

    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ( $type == 'cheese' )
            $pizza = new CheesePizza();
        elseif ( $type == 'greek' )
            $pizza = new GreekPizza();
        elseif ( $type == 'pepperoni')
            $pizza = new PepperoniPizza();

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        echo $pizza;

        return $pizza;
    }
}