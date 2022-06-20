<?php
namespace DesignPatterns\Strategy;


class DuckSimulator
{
    public function run()
    {
        $mallard_duck = new MallardDuck();
        $mallard_duck->display();
        $mallard_duck->quack();

        $rubber_duck = new RubberDuck();
        $rubber_duck->swim();
        $rubber_duck->fly();
        $rubber_duck->quack();
    }
}