<?php


namespace DesignPatterns\Strategy;


class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Squeak();
        $this->flyBehaviour = new FlyNoWay();
    }

    public function display()
    {
        echo 'displaying rubber duck' . PHP_EOL;
    }
}