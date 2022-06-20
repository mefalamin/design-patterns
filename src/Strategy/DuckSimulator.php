<?php
namespace DesignPatterns\Strategy;


class DuckSimulator
{
    public function run()
    {
        $mallard_duck = new MallardDuck();
        $mallard_duck->display();
        $mallard_duck->performQuack();

        $rubber_duck = new RubberDuck();
        $rubber_duck->swim();
        $rubber_duck->performQuack();
        $rubber_duck->performFly();
        $rubber_duck->setFlyBehaviour(new FlyingWithARocket());
        $rubber_duck->performFly();
    }
}