<?php
// array(). Creating ordered arrays.
// array of int
$array_one = array(0, 1, 2, 3, 4);
var_dump($array_one);
echo "\ncount array one = " . count($array_one);

// array of strings
$array_two = array("one", "two", "three", "four", "five");
var_dump($array_two);
echo "\n count array two = " . count($array_two);

// mixed array
$array_three = array(1, "two", 3, "four", 5);
var_dump($array_three);
echo "\ncount array three = " . count($array_three);

// arrays short syntax
$num_array = [0, 1, 2];
echo var_dump($num_array);

// it is easier to read an array when the values are on their own line
$num_array_own_line = [
    1,
    2,
    3,
    4,
    5
];

// printing arrays
// the php function print_r prints arrays in human-readable form. It prints the index and the value
echo "Using print_r(): ";
print_r($num_array);
// php function implode() prints the values / elements in string form
// takes two arguments. The $glue = separator and the $pieces = the array to br printed.
echo "\n Using the implode() function: " . implode(",", $num_array);

// accessing an element. using the variables name and the index number
// indexing an array
echo "\nArray one, index 0: " . $array_one[0];
echo "\nArray two, index 4: " . $array_two[4];
//using a variable as an index
$q = 1;
echo "\nArray three, index 1 using variable $q as index: " . $array_three[$q];

// codecademy example
$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

$winners = [
    $round_one[2],
    $round_two[0],
    $round_three[4]
];
echo "\narray of indexed arrays: " . implode("|", $winners);