<?php

class Beverage
{
    private $color;

    function setColor($color)
    {
        $this->color = strtolower($color);
    }

    function getColor($color)
    {
        return $this->color;
    }
}