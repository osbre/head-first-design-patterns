<?php


namespace Observer\Displays;


use Observer\Interfaces\DisplayElement;
use Observer\Interfaces\Observer;
use Observer\Interfaces\Subject;

class CurrentConditionsDisplay implements DisplayElement, Observer
{
    private $temperature;
    private $humidity;
    private $pressure;

    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->display();
    }

    public function display()
    {
        printf(" Temperature: %d \n Pressure: %d \n Humidity: %d \n\n",
            $this->temperature,
            $this->pressure,
            $this->humidity
        );
    }
}