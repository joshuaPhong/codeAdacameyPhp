<!--loops in html-->
<ul>
    <?php
    for ($i = 0; $i < 2; $i++) {
        ?>
        <li>Duck</li>
        <?php
    }
    ?>
    <li>Goose</li>
</ul>

<!--shorthand loop. Replace the opening and closing brackets with a colon and an endfor
statement-->
<h1>Only Shoes Shop</h1>
<?php
for ($i = 0; $i < 5; $i++):
?>
<p>We sell shoes</p>
<?php
endfor;
?>
<!--examples of shorthand-->
<h1>Only Shoes Shoe Shop</h1>
<?php
$i = 0;
$repeats = [0, 1];
while ($i < 5) :
    ?>
    <p>We sell shoes</p>
    <?php
    foreach ($repeats as $value) :
        ?>
        <p>(only shoes)</p>
    <?php
    endforeach;
    ?>
    <?php
    $i++;
endwhile;
?>

<!--echo php variables in html -->
<h1>Shoe Shop</h1>
<?php
$footwear = [
        "sandals" => 4,
        "sneakers" => 7,
        "boots" => 3
];
?>
<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands):
    ?>
    <p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
endforeach;
?>
<!--Review-->
<!---->
<!--With the PHP shorthand you have just learned, you can now create more readable HTML files with embedded PHP loops.-->
<!---->
<!--Here are the key ideas from this lesson:-->
<!---->
<!--    The PHP shorthand for loops uses a colon (:) instead of a bracket ({) to open the code block.-->
<!--    The shorthand uses keywords to close the code block instead of a bracket (}):-->
<!--        Use endfor to close a for loop-->
<!--        Use endforeach, to close a foreach loop-->
<!--        Use endwhile, to close a while loop-->
<!--    The closing keyword needs to be followed by a semicolon (;).-->
<!--    Make sure to re-enter PHP mode using --><?php //or the echo shorthand <?= before using PHP variables in the loop