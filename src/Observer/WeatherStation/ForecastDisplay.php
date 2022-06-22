<?php


namespace DesignPatterns\Observer\WeatherStation;


class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;
        $this->display();
    }

    public function display()
    {
        echo "Forecast: ";
		if ($this->currentPressure > $this->lastPressure) {
			echo "Improving weather on the way!" . PHP_EOL;
		} else if ($this->currentPressure == $this->lastPressure) {
			echo "More of the same" . PHP_EOL;
		} else if ($this->currentPressure < $this->lastPressure) {
			echo "Watch out for cooler, rainy weather" . PHP_EOL;
		}
    }
}