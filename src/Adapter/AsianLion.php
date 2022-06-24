<?php


namespace DesignPatterns\Adapter;


class AsianLion implements Lion
{

    public function roar()
    {
        echo 'roaring asian...' . PHP_EOL;
    }
}