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

$round_four = ["Y", "Y"];
$winners = [
    $round_one[2],
    $round_two[0],
    $round_three[4]
];
echo "\narray of indexed arrays: " . implode("|", $winners);

// adding and changing elements. Ordered arrays
// adding an element.
$winners[] = $round_four;// adds the $round_four to the $winners array
$round_four[] = "Y"; // adds a new string, Y, to the $round_four array
var_dump($round_four);
print_r($round_four);
echo implode("...", $round_four);

// changing an element
// we can change / reassign individual elements using the index [#]
$round_four[0] = "New element in the index[0] position: ";
echo implode("||", $round_four);
echo $round_four[0];

// array methods. pushing and popping. adding and removing from the end of the array
// array_pop(). Removes the last element of an array and returns the removed element
echo "\nunpopped array\n";
print_r($array_three);
echo "popped array\n";
$popped = array_pop($array_three);
print_r($array_three);
echo "\npop returns: " . $popped;

// array_push(). Adds elements to an ordered array.
// takes an array, and new elements (mixed)
echo "array_push method: ";
print_r($array_one);
array_push($array_one, "a new element", "another new element");
print_r($array_one);

// array methods. shift and unshift. adding and removing from the beginning of an array
// array_shift(). Removes and returns the first element of an array
echo "\narray_shift() method using \$array_two: \n";
print_r($array_two);
$shift = array_shift($array_two);
echo "shifted array two: " . implode("|", $array_two);

// array_unshift(). adds elements to the beginning of an array and returns the length of the array
echo "\narray_unshift() using \$array_two: \n";
print_r($array_two);
$unshifted = array_unshift($array_two,  "minus two", "minus one", "zero", "one");
echo "\nthe return value of unshift: " . $unshifted;
echo "\nthe unshifted array: ";
print_r($array_two);

//ORDERED ARRAYS
//Review
//
//Arrays are ordered collections of data that are a type of data structure fundamental to computer science.
//In PHP, we refer to this data structure as ordered arrays.
//The location of an element in an array is known as its index.
//The elements in an ordered array are arranged in ascending numerical order starting with index zero.
//We can construct ordered arrays with a built-in PHP function: array().
//We can construct ordered arrays with short array syntax, e.g. [1,2,3].
//We can print arrays using the built-in print_r() function or by converting them into strings using the implode() function.
//We use square brackets ([]) to access elements in an array by their index.
//We can add elements to the end of an array by appending square brackets ([]) to an array variable name and assigning the value with the assignment operator (=).
//We can change elements in an array using array indexing and the assignment operator.
//The array_pop() function removes the last element of an array.
//The array_push() function adds elements to the end of an array.
//The array_shift() function removes the first element of an array.
//The array_unshift() function adds elements to the beginning of the array.
//We can use chained square brackets ([]) to access and change elements within a nested array.