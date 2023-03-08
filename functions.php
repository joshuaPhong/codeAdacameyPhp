<?php
// DEFINE A FUNCTION
//  name the function(). in camelCase. open the code block with curly braces
function praisePHP(){
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
function returnNoEcho(){
    return 10;
    echo "this will not echo";
}

// no echo, only result
returnNoEcho();

$noEcho = returnNoEcho();
// this will echo the return statement 10
echo $noEcho;

// this will echo and return
function returnEchoAndResult(){
    echo "\nthis wii echo. Echo";
    return "\nthis will also echo. Return";
}
$anEchoAndReturn = returnEchoAndResult();
echo $anEchoAndReturn;