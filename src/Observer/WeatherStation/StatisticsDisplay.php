<?php

namespace DesignPatterns\Observer\WeatherStation;


class StatisticsDisplay implements DisplayElement, Observer
{
    private float $maxTemp = 0.0;
	private float $minTemp = 200;
	private float $tempSum= 0.0;
	private int $numReadings = 0;
	private WeatherData $weatherData;

	public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function display()
    {
		echo "Avg/Max/Min temperature = " . ($this->tempSum / $this->numReadings) .
			 "/" . $this->maxTemp . "/" . $this->minTemp . PHP_EOL;
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->tempSum += $temp;
		$this->numReadings++;

		if ($temp > $this->maxTemp) {
			$this->maxTemp = $temp;
		}

		if ($temp < $this->minTemp) {
			$this->minTemp = $temp;
		}

		$this->display();
    }
}