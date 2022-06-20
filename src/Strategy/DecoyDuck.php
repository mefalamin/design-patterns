<?php


namespace DesignPatterns\Strategy;


class DecoyDuck extends Duck
{

    public function display()
    {
        echo 'displaying decoy duck';
    }

    public function fly()
    {
        echo 'I can\'t fly';
    }

    public function quack()
    {
        echo 'I can\'t quack';
    }
}