<?php
$random_number = rand(1, 10);

function name($name): string
{
    return "<p>Your name is $name</p>";
}

$age = "";
$name = "";
if (isset($_GET["submit"]) && !empty($_GET["submit"])) {
    $age = $_GET["age"];
    $name = $_GET["name"];
}

?>


<html lang="en">
<body>
<h1>PHP and HTML</h1>
<p>This is HTML</p>
<?= "<p>This is php</p>"; ?>
<!-- using a variable inside html-->
<?= "<p>Your random number is : $random_number</p>" ?>
<!--calling a function-->
<?= name($name) ?>
<div>
    <form method="get">
        <label for="name">Enter your name: </label><br>
        <input type="text" name="name" id="name"><br>
        <label for="age">Enter your age: </label><br>
        <input type="text" name="age" id="age"><br>
        <input type="submit" name="submit"><br>
    </form>
</div>
<div>
    <p>Your age is: <?php echo $age; ?></p>
    <p>Your name is: <?= $name;?></p>
</div>
<div>
<!--    --><?php //echo $age ?>
</div>
</body>
</html>