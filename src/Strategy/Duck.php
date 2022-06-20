<?php


namespace DesignPatterns\Strategy;


abstract class Duck
{
    public function quack()
    {
        echo 'quack!!' . PHP_EOL;
    }

    public function fly()
    {
        echo 'flying' . PHP_EOL;
    }

    public function swim()
    {
        echo 'swim' . PHP_EOL;
    }

    abstract public function display();
}