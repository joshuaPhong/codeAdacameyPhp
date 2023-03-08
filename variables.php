<?php
// the $ sign is a sigill that the computer knows is a variable
// variables have names eg, my_name
// they are assigned a value with =

$my_name = "joshua";
$biography = "\nI am from New Zealand";

// concatenation of assignment
$favorite_food = "\n" . "tur" . "duck" . "en";

// examples
$name = "joshua";
$language = "php";
echo "my name is: " . $name;
echo "\n" . "I am learning" . " " . $language;

// variable parsing
$noun = "boob";
$adjective = "big";
$verb = "bouncing";

echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";

// use curly braces to wrap variable name
// the computer will recognise the variables name in the braces after the $
echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";

// Variable reassignment
$movie = "labyrinth";
// reassigned
$movie = "krull";
// assigned
$old_favorite = $movie;

echo "I'm a fickle person, my favorite movie used to be $movie.";
// reassigned
$movie = "mission impossible";

echo "\r\nBut now my favorite is $movie.";

echo "\nmy favorite movie at the moment is an old favorite $old_favorite";

// concatenating the assignment operator
// the computer will evaluate everything to the right of the assignment
// operator and the assign it
// appending a variable
$sentence = "\nI am going to the movies";
echo $sentence;
$sentence = $sentence . " to see Krull";
echo $sentence;
// shorthand for appending .=
$sentence .= " and to see Krull2";
echo $sentence;

// assignment by reference
// Aliases