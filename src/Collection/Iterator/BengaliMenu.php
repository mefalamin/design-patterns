<?php

namespace DesignPatterns\Collection\Iterator;


use Iterator;

class BengaliMenu implements Menu
{
    protected array $bnaglaMenu = [
        'Panta Ilish',
        'Kacchi Biryani',
        'Vuna Khichuri/ Khichuri',
        'Morog Polao',
        'Grill Chicken With Naan Roti',
        'Haleem',
        'Seekh Kebab',
        'Puchka',
    ];

    public function createIterator(): BengaliMenuIterator
    {
        return new BengaliMenuIterator($this->bnaglaMenu);
    }
}