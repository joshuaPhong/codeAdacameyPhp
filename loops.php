<?php
// while loop. executes so long as the condition is true.
$count = 1;
while ($count < 11){
    echo "your a dick\n";
    $count += 1;
}

$count = 1;
while ($count <= 100)
{
    if ($count % 33 === 0) {
        echo $count . " is divisible by 33\n";
    }
    $count += 1;
}

// do while loop
$plant_height = 22;
do  {
    echo "The plant is $plant_height tall.\n";
    if ($plant_height >= 30) {
        echo "And can produce fruit.\n";
    }
    $plant_height ++;
} while ($plant_height < 31);

// for loops

function for_loop(): void
{
    echo "\nThis is a for loop \n";
    for ($count = 1; $count < 100; $count++){

        echo $count . "||\n";
    }
}
echo for_loop();
// for loop with if conditions
for($i = 10; $i >=0; $i--){
    if($i >= 3){
        echo $i . "\n";
    }elseif($i === 2){
        echo "Ready!\n";
    }elseif($i === 1){
        echo "Set!\n";
    }elseif($i === 0){
        echo "Go!\n";
    }
}

// for each loops
// for each loops over an array
// iterate over an indexed array
$counting_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($counting_array as $count) {
    echo "The count is: " . $count . "\n";
}
// a key value / dictionary array
$scores = [
    "Alice" => 99,
    "Bob" => 95,
    "Charlie" => 98,
    "Destiny" => 91,
    "Edward" => 88
];
// iterate over the values of an array
foreach($scores as $score){
    echo "the score is: $score\n";
}
// iterate over the keys and values of the array
foreach($scores as $name => $score){
    echo $name . " score is " . $score . "\n";
}
// using break and continue
// the break statement ends the loop early.
// the continue statement makes the loop skip the condition i.e. number 6
for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
        echo "Ready!\n";
    } elseif ($i === 1) {
        echo "Set!\n";
        break;
    } elseif ($i === 0) {
        echo "Go!\n";
    } elseif($i === 6) {
        continue;
    }else{
        echo $i . "\n";
    }
}
//Review
//
//Now you have the ability to repeat execution of code blocks as necessary in your PHP programs.
//
//Here is a summary of the topics covered in this lesson:
//
//    while loops execute only as long as their conditional evaluates to TRUE.
//do…while loops always execute at least once and then continue executing while their conditional is TRUE.
//    for loops contain 3 expressions and are frequently used to execute a code block a specific number of times.
//The first expression is executed prior to the first iteration.
//The second expression is evaluated prior to each iteration. If TRUE, the code block executes. Otherwise, the loop terminates.
//The third expression is evaluated after each iteration.
//    foreach loops are used for iterating over the elements of an array. The key and value of each element is available in the code block.
//    break is used to end execution of a loop early.
//    continue is used to end execution of a loop iteration early and continues to the next iteration.