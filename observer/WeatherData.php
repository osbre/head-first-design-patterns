<?php

namespace Observer;

use Observer\Interfaces\Observer;
use Observer\Interfaces\Subject;

class WeatherData implements Subject
{
    /**
     * @var array
     */
    private $observers = [];
    /**
     * @var float
     */
    private $temperature;
    /**
     * @var float
     */
    private $humidity;
    /**
     * @var float
     */
    private $pressure;

    public function registerObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(Observer $observer)
    {
        foreach ($this->observers as $key => $currentobserver) {
            if ($currentobserver === $observer) {
                array_splice($this->observers, $key);
                break;
            }
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }
}
