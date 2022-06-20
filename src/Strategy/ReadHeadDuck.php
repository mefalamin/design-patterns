<?php


namespace DesignPatterns\Strategy;


class ReadHeadDuck extends Duck
{

    public function display()
    {
        echo 'displaying ReadHeadDuck duck' . PHP_EOL;
    }

}