<?php
$first = "Welcome to the magical world of built-in functions.";

$second = 82137012983;

// examples of built-in functions
var_dump($first);
var_dump($second);
echo gettype($first);
echo gettype($second);

// string reverse. Takes a string as its argument. reverses the string
echo strrev("\n" . $first);

// string to lower and string to upper. takes a string and changes its case.
echo strtolower("\nstring to lower: " . $first);
echo strtoupper("\nstring to upper: " . $first);

// sub strings
// substr_count. returns the number (int) of times a substring appears in a string
//substr_count(
//    string $haystack,
//    string $needle,
//    int $offset = 0,
//    ?int $length = null
//): int

$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";

$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";

echo substr_count($essay_one, "really");
echo substr_count($essay_two, "obvious");

// number functions
// abs(). returns the absolute value of an argument. remove the negative
echo "\n abs(-12.87)\n" . abs(-12.87);
// round() returns the nearest integer
echo "\nround(12.87)\n" . round(12.87);

function calculateDistance($num1, $num2): float|int
{
    $distance = $num1 - $num2;
    return abs($distance);
}
echo "\n" . calculateDistance(4, -1);

// round().
function calculateTip($totalCost): float
{
    $newTotal = $totalCost + ($totalCost * (18/100));
    return round($newTotal);
}
echo "\n" . calculateTip(123);

// generating random numbers. rand(): int and  rand($min, $max): int
$max = getrandmax();

echo " Rand Max: " . $max;

echo "\r\nrand(): " . rand(); // Prints a number between 0 and $max
echo "\n rand with min = 4 and max = 56: " . rand(4, 56);