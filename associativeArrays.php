<?php
// associative arrays. key => value pairs
// short syntax
$array_short = ["first_name" => "joshua", "last_name" => "fox", "address" => "klx2044@yahoo.com"];

// long syntax
$array_long = array(
    "first_name" => "alexandra",
    "last_name" => "arnold",
    "address" => "vert-nas@outlook.com"
);

// printing arrays
print_r($array_short);
echo implode("| |", $array_long);
echo "\r\n";
print_r($array_long);

// accessing array elements
// use the key to access a value
echo "\naccessing associative array elements. Use they Key: first_name yields." . $array_long["first_name"];
// assigning the value to a variable
$value = $array_short["first_name"];
echo "\nassigning a key to a variable. '\$value = \$array_short[\"first_name\"];' " . $value;

// using a variable as a key
$name = "first_name";
echo $array_short[$name];

// adding array elements
// $array, key, value
$array_short ["age"] = 50;
$array_long ["age"] = 76;
print_r($array_short);
print_r($array_long);

// the computer treats code between [] as an expression. It will be evaluated before the array is
// accessed
$array_short ["id"] = 1;
// the stringToLower function coverts the case inside the [] before the array is called
echo "\n" . $array_short [strtolower("ID")];

// changing array elements is the same as adding them
$array_short ["id"] = 2; // changes id to 2
echo $array_short ["id"]; // prints 2

// removing key=>value pairs.
// using the unset() function
unset($array_short["id"]); // removes id
print_r($array_short); // prints array, id is removed

// numerical keys
// associative arrays can use integers as keys, as well as strings
$number_array = [
    1 => "one",
    10 => "ten",
    100=> "one hundred",
    1000=>"one thousand"
];
echo implode("' '", $number_array);
$number_array [] = "a string"; // no key specified. The next highest integer is used. 1001
echo implode("' '", $number_array);
var_dump($number_array);

// joining arrays
//  are joined with the union operator +
// only unique keys are added (int or string)
$join = $array_short + $array_long;
echo "\njoin short and long\n";
print_r($join);
echo "\nbecause the arrays short and long have the same keys there is no extra: Lets try short plus num: \n";
$join2 = $array_short + $number_array;
print_r($join2);