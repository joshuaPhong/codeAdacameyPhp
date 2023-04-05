<?php

class AdamsUtils
{
    public static $the_answer = 42;

    public static function addTowel($string)
    {
        return $string . " and a towel.";
    }
}

$items = "I brought apples";

// accessing static variable using the scope resolutin operator ::
echo AdamsUtils::$the_answer;
// accessing a static method / function
echo '<br>';
echo AdamsUtils::addTowel($items);