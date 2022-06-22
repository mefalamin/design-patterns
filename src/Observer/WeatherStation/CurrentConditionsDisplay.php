<?php


namespace DesignPatterns\Observer\WeatherStation;


class CurrentConditionsDisplay implements DisplayElement, Observer
{
    private float $temperature = 0;
	private float $humidity = 0;
	private WeatherData $weatherData;

	public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function display()
    {
        echo "Current conditions: " . $this->temperature
			. "F degrees and " . $this->humidity . "% humidity" . PHP_EOL;
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->temperature = $temp;
		$this->humidity = $humidity;
		$this->display();
    }
}