<?php

namespace DesignPatterns\Collection\Iterator;


use Iterator;

class EnglishMenu implements Menu
{
    protected array $englishMenu = [
        'Full English Breakfast',
        'Black Pudding',
        'Eggy Bread',
        'Kedgeree',
        'Crumpet',
        'Fish And Chips',
        'Bangers And Mash',
    ];

    public function createIterator() : EnglishMenuIterator
    {
        return new EnglishMenuIterator($this->englishMenu);
    }
}