<?php
// if statements
// if(the condition){if the condition is true the code block will run}
//if(condition){
//    code block
//}

// booleans. TRUE or FALSE
$true = TRUE;
$false = FALSE;
function markAnswer($is_correct): string
{
    if ($is_correct) {
        return "green\n";
    } else {
        return "red\n";
    }
}

echo markAnswer($true) . "\n";
echo markAnswer($false);

// comparison operators < less than >greater than
// if else statements
function chooseCheckoutLane($num)
{
    if ($num <= 12) {
        return "express lane ";
    } else {
        return "regular lane ";
    }
}

// choose checkout lane using the ternary operator
function ternaryCheckout($items)
{
    return $items <= 12 ? "express lane ternary" : "regular lane ternary";
}

echo ternaryCheckout(12);


echo chooseCheckoutLane(1);
echo chooseCheckoutLane(13);

function canIVote($age)
{
    if ($age >= 18) {
        return "yes ";
    } else {
        return "no ";
    }
}

echo canIVote(1);
echo canIVote(21);

// ternary version
function ternaryVote($age)
{
    return $age >= 18 ? "yes" : "no";
}

echo ternaryVote(12);
echo ternaryVote(21);

// identical === and not identical !== operators
// === returns true if the left hand operator is the same as the right hand operator
// !== returns true if the operators are not the same

function checkRenewalMonth($month): string
{
    if ($month !== date("F")) {
        return "Welcome!\n";
    } else {
        return "Time to renew\n";
    }
}

echo checkRenewalMonth("March");
echo checkRenewalMonth("April");

// elseif statements
// conditionals that can handle more than one condition
// function to determine the genetic relationship between two people
function whatRelation($percentage_between)
{
    if ($percentage_between === 100) {
        return "identical twins";
    } elseif ($percentage_between >= 35) {
        return "parent and child or full siblings";
    } elseif ($percentage_between >= 14) {
        return "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ($percentage_between >= 6) {
        return "first cousins";
    } elseif ($percentage_between >= 3) {
        return "second cousins";
    } elseif ($percentage_between >= 1) {
        return "third cousins";
    } else {
        return "not genetically related";
    }
}

echo whatRelation(1);
echo whatRelation(10);
echo whatRelation(100);

// switch statements
function airQuality($color): void
{
    switch ($color) {
        case "green":
            echo "good";
            break;
        case "yellow":
            echo "moderate";
            break;
        case "orange":
            echo "unhealthy for sensitive groups";
            break;
        case "red":
            echo "unhealthy";
            break;
        case "purple":
            echo "very unhealthy";
            break;
        case "maroon":
            echo "hazardous";
            break;
        default:
            echo "invalid color";
    }
}

// the switch statement in the function airQuality can be replaced with a match statement
function airQualityMatch($color): void
{
    echo match ($color) {
        "green" => "good",
        "yellow" => "moderate",
        "orange" => "unhealthy for sensitive groups",
        "red" => "unhealthy",
        "purple" => "very unhealthy",
        "maroon" => "hazardous",
        default => "invalid color",
    };
}

echo airQuality("red");
echo airQuality("green");
echo airQuality("purple");

// switch using fall through. i.e. not using breaks
function returnSeason($month): string
{
    switch ($month) {
        case "December":
        case "January":
        case "February":
            return "winter";
            break;
        case "March":
        case "April":
        case "May":
            return "spring";
            break;
        case "June":
        case "July":
        case "August":
            return "summer";
            break;
        case "September":
        case "October":
        case "November":
            return "fall";
            break;
        default:
            return "invalid month";
    }
}

echo returnSeason("January");
echo returnSeason("March");
echo returnSeason("June");
echo returnSeason("October");

// truthy or falsy
function truthyOrFalsy($value)
{
    if ($value) {
        return "True";
    } else {
        return "False";
    }
}

echo truthyOrFalsy("green");
echo truthyOrFalsy("0");

// user input readline()
function nameLength($name)
{
    switch ($name) {
        case strlen($name) > 8:
            return "Hi $name. That's a long name.";
            break;
        case strlen($name) >= 4 && strlen($name) <= 8:
            return "Hi, $name";
        case strlen($name) < 3:
            return "Hi, $name. That's a short name. ";
            break;
        default:
            return "invalid input";
    }
}

echo "Hello, there. What's your first name?\n";
$name = readline(">> ");
if (strlen($name))
    echo "\nnice to meet you, $name";
echo nameLength($name);