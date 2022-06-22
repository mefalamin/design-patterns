<?php


namespace DesignPatterns\Collection\Iterator;


class Cafe
{
    public static function run()
    {
        $bangla_menu = (new BengaliMenu())->createIterator();
        $english_menu = (new EnglishMenu())->createIterator();

        echo '------------------Bengali Menu--------------' . PHP_EOL;
        while($bangla_menu->hasNext()) {
            echo $bangla_menu->next() . PHP_EOL;
        }

        echo '------------------English Menu--------------' . PHP_EOL;
        while($english_menu->hasNext()) {
            echo $english_menu->next() . PHP_EOL;
        }
    }
}