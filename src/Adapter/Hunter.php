<?php


namespace DesignPatterns\Adapter;


class Hunter
{
    protected Lion $lion;

    public function __construct(Lion $lion)
    {
        $this->lion = $lion;
    }

    public function hunt()
    {
        $this->lion->roar();
    }
}