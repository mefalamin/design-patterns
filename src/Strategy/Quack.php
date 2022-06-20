<?php


namespace DesignPatterns\Strategy;


class Quack implements QuakeBehavior
{

    public function quake()
    {
          echo 'quack!!' . PHP_EOL;
    }
}