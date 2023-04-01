<?php
// this function will trim white space
// strip the slashes from text
// and make html characters safe
function cleanInput($data): string
{
    return htmlspecialchars(stripslashes(trim($data)));
}

// using the filter_var() functions

$validation_error = "";
$user_answer = "";
$submission_response = "";

// this filter will strip all but the int. e.g. <p>-5</p> will be sanitised to -5
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
    if ($user_answer == -5){
        $submission_response = "Correct!";
    }else{
        $validation_error = "* Wrong answer. Try again.";
    }
}
?>

<h2>Time for a math quiz!</h2>
<form method="post" action="">
    <h4>Question 1:</h4>
    <p>What is 6 - 11?</p>
    <input type="text" name="answer" id="answer" value="<?= $user_answer;?>">
    <br>
    <span class="error" id="error"><?= $validation_error;?></span>
    <br>
    <input type="submit" value="Submit Your Answer">
</form>
<div>
    <p id="answer-display">Your answer was: <?= $user_answer;?></p>
    <p id="submission-response"><?= $submission_response;?></p>
</div>