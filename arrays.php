<?php
// array(). Creating ordered arrays.
// array of int
$array_one = array(0,1,2,3,4);
var_dump($array_one);
echo "\ncount array one = " . count($array_one );
// array of strings
$array_two = array("one", "two", "three", "four", "five");
var_dump($array_two);
echo "\n count array two = " . count($array_two);
// mixed array
$array_three = array(1, "two", 3, "four", 5);
var_dump($array_three);
echo "\ncount array three = " . count($array_three);