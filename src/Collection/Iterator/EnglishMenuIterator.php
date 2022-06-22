<?php


namespace DesignPatterns\Collection\Iterator;


class EnglishMenuIterator implements Iterator
{
    private array $items;
    private int $index = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function hasNext(): bool
    {
        if($this->index < sizeof($this->items)){
            return true;
        } else {
           return false;
        }
    }

    public function next()
    {
        $item = $this->items[$this->index];
        $this->index = $this->index + 1;
        return $item;
    }
}