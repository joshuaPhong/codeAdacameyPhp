<?php
// using the preg_replace function
// preg_replace($pattern, $replacement, $subject);
// searches $subject for $pattern and replaces with $replacement

// variables
$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];
$message = "";
$validation_error = "* Please enter a 10-digit North American phone number.";
$name = "";
$number = "";
$new_number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    if (strlen($number) < 30) {
       $new_number = preg_replace("/[^0-9]/", "", $number);
   } else {
        $message = $validation_error;
    }
    if (strlen($new_number) == 10) {
        $contacts [$name] = $new_number;
$message = "Thanks $name, we'll be in touch.";
   } else {
        $message = $validation_error;
    }
    echo implode(", ", $contacts);


}
?>
<html lang="">
<body>
<h3>Contact Form:</h3>
<form method="post" action="">
    Name:
    <br>
    <input type="text" name="name" value="<?= $name; ?>">
    <br><br>
    Phone Number:
    <br>
    <input type="text" name="number" value="<?= $number; ?>">
    <br><br>
    <input type="submit" value="Submit">
</form>
<div id="form-output">
    <p id="response"><?= $message ?></p>
</div>
</body>
</html>