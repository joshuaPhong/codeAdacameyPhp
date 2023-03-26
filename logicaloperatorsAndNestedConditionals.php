<?php
// nested conditionals
function both($param_one, $param_two): string
{
    if ($param_one) {
        if ($param_two) {
            return "both";
        } else {
            return "not both";
        }
    } else {
        return "not both";
    }
}

echo both(true, true);
echo both(true, false);

// the or || operator
function willWeEat($food_type, $hungry): string
{
    if (($food_type === "dessert") || $hungry) {
        return "Yum. Thanks!";
    } else {
        return "No thanks. We're not hungry";
    }
}

echo willWeEat("dessert", true);
echo willWeEat("dessert", false);
echo willWeEat("main", false);

// the && operator
function clapYourHands($happy, $know_it)
{
    if ($happy && $know_it) {
        return "CLAP!";
    } else {
        return ":(";
    }
}

$happy = true;
$not_happy = false;
$know_it = "I know it";
echo clapYourHands(true, $know_it);
echo clapYourHands(false, $know_it);
echo clapYourHands(false, false);

//the NOT ! operator. reverses the value of it operand

function duckDuckGoose($is_goose)
{
    if (!$is_goose) {
        return "duck";
    } else
        return "goose!";
}

echo "parameter is true and should return false and be a goose: \n" . duckDuckGoose(true);
echo "parameter is false should return true and be a duck: \n" . duckDuckGoose(false);

// the operator xor. exclusive or. one or the other but NOT both.
// can use for either / or questions
$fruit = "";
$protein = "";
function xor_function($fruit, $protein)
{
    if ($fruit === "banana" xor $protein === "chicken") {
        return "Dig in!";
    } else {
        return "not eating";
    }

}

// one or the other but not both
echo xor_function("banana", "chicken");// returns false
echo xor_function("apple", "beef");// returns false
echo xor_function("banana", "meat");// returns true
echo xor_function("banana", "beef");// returns true