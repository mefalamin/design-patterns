<?php


namespace DesignPatterns\Strategy;


class ReadHeadDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehaviour = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo 'displaying ReadHeadDuck duck' . PHP_EOL;
    }

}