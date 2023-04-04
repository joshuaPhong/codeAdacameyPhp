<?php

// defining classes
// class and class name
class Pet
{
    // visability and properties
    public $name;
}

// instantiating an instance of a class, an object
$batmans_pet = new Pet();
// assign a value to the object using the -> operator
$batmans_pet->name = "joker";
// print the objects value to the screen
echo $batmans_pet->name;