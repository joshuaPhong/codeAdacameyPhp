<?php

class Beverage
{
    public $temperature;

    function getInfo(): string
    {
        return "This beverage is $this->temperature.";
    }
}

class Milk extends Beverage
{
    function __construct()
    {
        $this->temperature = "cold";
    }

}

$milk = new Milk();
echo $milk->getInfo();