<?php


namespace DesignPatterns\Strategy;


class Mute implements QuakeBehavior
{

    public function quake()
    {
          echo 'silence.....' . PHP_EOL;
    }
}