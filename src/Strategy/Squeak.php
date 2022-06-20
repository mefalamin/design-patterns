<?php


namespace DesignPatterns\Strategy;


class Squeak implements QuakeBehavior
{

    public function quake()
    {
          echo 'squeak!!' . PHP_EOL;
    }
}