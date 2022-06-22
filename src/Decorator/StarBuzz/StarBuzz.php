<?php

namespace DesignPatterns\Decorator\StarBuzz;


class StarBuzz
{
    public static function run()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription();
        echo ' cost: ' . $beverage->cost() . PHP_EOL;

        $beverage2 = new HouseBlend();
        $beverage2 = new Milk($beverage2);
        $beverage2 = new Whip($beverage2);
        $beverage2 = new Soy($beverage2);
        echo $beverage2->getDescription();
        echo ' cost: ' . $beverage2->cost();

    }
}