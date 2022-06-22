<?php


namespace DesignPatterns\Observer\WeatherStation;


class WeatherData implements Subject
{
    public float $temperature;
    public float $humidity;
    public float $pressure;
    public array $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o)
    {
        $this->observers [] = $o;
    }

    public function removeObserver(Observer $o)
    {

    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementsChanged();
	}

    public function notifyObserver()
    {
        /* @var $o Observer  */
        foreach ($this->observers as $o)
        {
            $o->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    private function measurementsChanged()
    {
        $this->notifyObserver();
    }
}