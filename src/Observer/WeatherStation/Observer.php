<?php


namespace DesignPatterns\Observer\WeatherStation;


interface Observer
{
    public function update(float $temp, float $humidity, float $pressure);
}