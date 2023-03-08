<?php
// numbers are declared and assigned like strings
// there are integers and floats./
$int = 50;
$float  = 50.11;
echo "integer: ${int} \n float: ${float}" . PHP_EOL;

// Operators
// addition and subtraction
echo "\n" . 6+6 . PHP_EOL;
echo 6-6 . PHP_EOL;

// using operators on numeric variables
$age = 50;
$new_age = 50.11;
$diff_age = $new_age - $age;
echo $age;
echo "\r\nyour age difference is ${diff_age}" . PHP_EOL;
echo "\nyour age difference is $diff_age";

// multiplication and division
// * is multiplication
// / is division
// the computer will return an int or a float depending on the result not the
// type

// Exponents ** operator
echo "\nFour to the power of two = " . 4**2;

// Modulo %
// the remainder after division
echo "\r\nseven modulo 3 = " . 7 % 3;
echo "\nbecause seven dived by three is two with a remainder of one";
// modulo will convert floats to integers
echo " 7.8 % 3.5 returns the same result " .  7.8 % 3.5;

// order of operations. BEDMAS.

// Mathematical assignment operators
//Operation:	Long Syntax:	Short Syntax:
//Add	$x = $x + $y	$x += $y
//Subtract $x = $x - $y	$x -= $y
//Multiply	$x = $x * $y	$x *= $y
//Divide	$x = $x / $y	$x /= $y
//Mod	$x = $x % $y	$x %= $y
// post increment ++ adds one to the variable
// post decrement -- subtracts one from the variable