<?php
namespace DesignPatterns\Factory;

abstract class Pizza
{
    protected array $toppings = [];


    public function prepare()
    {
        echo "making ". get_called_class() . "pizza" . PHP_EOL;
    }

    public function bake()
    {
        echo "baking ". get_called_class() . "pizza" . PHP_EOL;
    }

    public function cut()
    {
        echo "cutting ". get_called_class() . "pizza" . PHP_EOL;
    }
}