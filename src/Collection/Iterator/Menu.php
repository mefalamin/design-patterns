<?php


namespace DesignPatterns\Collection\Iterator;


interface Menu
{
    public function createIterator(): Iterator;
}