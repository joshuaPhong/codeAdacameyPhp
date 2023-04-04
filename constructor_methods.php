<?php

class Beverage
{
    public $temperature, $color, $opacity;

//constructors initialise the objects properties when creating an object
    function __construct($temperature, $color)
    {
        $this->temperature = $temperature;
        $this->color = $color;

    }

    function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}

// creating an object
$soda = new Beverage("cold", "black");
// using the classes function.
echo $soda->getInfo();