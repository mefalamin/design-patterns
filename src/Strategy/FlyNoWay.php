<?php


namespace DesignPatterns\Strategy;


class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo 'can\'t flying' . PHP_EOL;
    }
}