<?php

require __DIR__.'/../vendor/autoload.php';

use Observer\WeatherData;
use Observer\Displays\{
    CurrentConditionsDisplay
};

$weatherData = new WeatherData;

$currentDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(30, 19, 10);
$weatherData->setMeasurements(15, 9, 3);
$weatherData->setMeasurements(24, 7, 13);