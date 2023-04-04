<?php
// when public the class milk can use the variables.
// when private the class milk cannot see them
// we can set the variables to protected so that the child classes can see them
class Beverage
{
    // child classes can see protected variables
    protected $temperature, $color;
    public $opacity;

    function __construct($temperature, $color)
    {
        $this->temperature = $temperature;
        $this->color = $color;
    }

    function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}

class Milk extends Beverage
{
    function setOpacity($opacity)
    {
        $this->opacity = $opacity;
        return "This beverage is $this->temperature and $this->color and is $this->opacity. ";
    }
}

$milk = new Milk("hot", "black");
echo $milk->setOpacity("clear");


$beverage = new Beverage("warm", "red");
echo $beverage->getInfo();