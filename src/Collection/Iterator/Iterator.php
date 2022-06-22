<?php


namespace DesignPatterns\Collection\Iterator;


interface Iterator
{
    public function hasNext(): bool;
    public function next();
}