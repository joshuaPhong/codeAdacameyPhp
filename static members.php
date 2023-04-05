<?php

class AdamsUtils
{
    public static int $the_answer = 42;

    public static function addTowel($string): string
    {
        return $string . " and a towel.";
    }
};// we added the colon because we need to close the string identifier

$items = "I brought apples";

// accessing static variable using the scope resolution operator ::
echo AdamsUtils::$the_answer;
// accessing a static method / function
echo '<br>';
echo AdamsUtils::addTowel($items);