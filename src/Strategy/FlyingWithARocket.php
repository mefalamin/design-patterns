<?php


namespace DesignPatterns\Strategy;


class FlyingWithARocket implements FlyBehavior
{

    public function fly()
    {
        echo 'I am Flying with a rocket' . PHP_EOL;
    }
}