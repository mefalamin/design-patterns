<?php


namespace DesignPatterns\Strategy;


class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehaviour = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo 'displaying mallard duck' . PHP_EOL;
    }
}