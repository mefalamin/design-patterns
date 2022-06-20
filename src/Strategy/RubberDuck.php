<?php


namespace DesignPatterns\Strategy;


class RubberDuck extends Duck
{

    public function display()
    {
        echo 'displaying rubber duck' . PHP_EOL;
    }

    public function fly()
    {
        echo 'can\'t fly' . PHP_EOL;
    }

    public function quack()
    {
        echo 'squeak' . PHP_EOL;
    }
}