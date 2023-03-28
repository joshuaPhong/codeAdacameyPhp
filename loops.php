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