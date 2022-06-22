<?php


namespace DesignPatterns\Observer\WeatherStation;


class WeatherStation
{
    public static function run()
    {
        $weather_data = new WeatherData();
        $current_condition_display = new CurrentConditionsDisplay($weather_data);
        $statistics_display = new StatisticsDisplay($weather_data);
        $forecast_display = new ForecastDisplay($weather_data);

        $weather_data->setMeasurements(80, 65, 30.4);
		$weather_data->setMeasurements(82, 70, 29.2);
		$weather_data->setMeasurements(78, 90, 29.2);
    }
}