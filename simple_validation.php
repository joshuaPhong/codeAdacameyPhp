<?php
$validation_error = "";
$a = "";
$b = "";
$c = "";
$letter = "";
$input = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
}
function checkWord($input, $letter): string
{
    if (!str_starts_with(strtolower($input), $letter)) {
        return "* This word must start with the letter $letter!";
    } else {
        return "";
    }
}

var_dump(checkWord($input, $letter));

?>

<h1>Practice our abc</h1>
<form method="post" action="simple_validation.php">
    <label for="a">Enter a word that starts with the letter A:</label>
    <input name="a" type="text" id="a" value="<?= $a ?>">
    <p><?= checkWord($a, "a") ?></p>
    <br>
    <label for="b">Enter a word that starts with the letter B:</label>
    <input name="b" type="text" id="b" value="<?= $b ?>">
    <p><?= checkWord($b, "b") ?></p>
    <br>
    <label for="c">Enter a word that begins with the letter C:</label>
    <input name="c" type="text" id="c" value="<?= $c ?>">
    <p><?= checkWord($c, "c") ?></p>
    <br>
    <input type="submit" value="submit">
</form>
<div>
    <p>"a" is for: <?= $a; ?></p>

    <p>"b" is for: <?= $b; ?></p>
    <p>"c" is for: <?= $c; ?></p>
</div>