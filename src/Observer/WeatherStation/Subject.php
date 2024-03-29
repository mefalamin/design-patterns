<?php


namespace DesignPatterns\Observer\WeatherStation;


interface Subject
{
    public function registerObserver(Observer $o);
    public function removeObserver(Observer $o);
    public function notifyObserver();
}