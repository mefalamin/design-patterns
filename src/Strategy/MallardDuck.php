<?php


namespace DesignPatterns\Strategy;


class MallardDuck extends Duck
{

    public function display()
    {
        echo 'displaying mallard duck' . PHP_EOL;
    }
}