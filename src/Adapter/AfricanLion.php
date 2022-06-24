<?php


namespace DesignPatterns\Adapter;


class AfricanLion implements Lion
{

    public function roar()
    {
        echo 'roaring african...' . PHP_EOL;
    }
}