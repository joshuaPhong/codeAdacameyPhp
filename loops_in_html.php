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