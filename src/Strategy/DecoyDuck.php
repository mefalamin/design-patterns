<?php


namespace DesignPatterns\Strategy;


class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehaviour = new FlyNoWay();
        $this->quackBehavior = new Mute();
    }

    public function display()
    {
        echo 'displaying decoy duck';
    }
}