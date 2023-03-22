<?php
// DEFINE A FUNCTION
//  name the function(). in camelCase. open the code block with curly braces
function praisePHP(): string
{
    echo "php is great for forms";
    return "\nand mixing in html";
}

// call/invoke
// function.
praisePHP();

// return statements
// assign a variable to the result / return of the function
$return = praisePHP();
// echo the variable / return statement
echo $return;

// functions stop running when the return statement is reached
function returnNoEcho(): int
{
    return 10;
    echo "this will not echo";
}

// no echo, only result
echo
returnNoEcho();

$noEcho = returnNoEcho();
// this will echo the return statement 10
echo $noEcho;

// this will echo and return
function returnEchoAndResult(): string
{
    echo "\nthis will echo. Echo";
    return "\nthis will also echo. Return";
}

$anEchoAndReturn = returnEchoAndResult();
echo $anEchoAndReturn;

// parameters
// of type string
function increaseEnthusiasm($parameter): string
{
    return $parameter . "!\n";
}

// the parameters argument is joshua
echo increaseEnthusiasm("joshua");

function repeatThreeTimes($parameter): string
{
    return str_repeat($parameter . "\n", 3);
}

echo repeatThreeTimes("joshua\n");

echo repeatThreeTimes(increaseEnthusiasm("joshua"));
echo increaseEnthusiasm(repeatThreeTimes("joshua"));

// multiple parameters
function divide($num1, $num2): float|int
{
    return $num1 / $num2;
}

echo divide(4, 8);
$var1 = 23;
$var2 = 67;
echo "\n23 / 67 = " . divide($var1, $var2);

// default parameters. we can declare a value for our parameter so that there is no error if called without an argument

function d($d = "default")
{
    return $d;
}

echo "\nthis is the " . d() . "\n";
echo "this is not the default" . d("\nnot the default");

// pass by reference
// permanently change a variable with a function
// prepend the parameter &$parameter
$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:
function convertToQuestion(&$string){
    $string = "Do you think " . $string . "?\n";
    return $string;
}
echo convertToQuestion($string_one);
echo convertToQuestion($string_two);
echo convertToQuestion($string_three);

// variable scope
// variables within functions have local scope. They cannot be accessed from outside the function
// The global keyword. Can then use variables outside the local scope/ function
// All the variables in this function are local.
function calculateDaysLeft($feed_quantity, $number, $rate): float|int
{
    return $feed_quantity / ($number * $rate);
}
echo calculateDaysLeft(300, 2, 30);

// this function has a global variable so that it can be used outside the function
$feed_quantity = 300;
function calculateDaysLeft2($number, $rate): float|int
{
    global $feed_quantity;
    return $feed_quantity / ($number * $rate);
}
echo calculateDaysLeft2(2, 120);
echo "well done!";
echo "changed?";