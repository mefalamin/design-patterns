<?php


namespace DesignPatterns\Strategy;


class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo 'flying' . PHP_EOL;
    }
}