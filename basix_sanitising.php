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
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
    if ($user_answer == -5) {
        $submission_response = "Correct!";
    } else {
        $validation_error = "* Wrong answer. Try again.";
    }
}
?>

<h2>Time for a math quiz!</h2>
<form method="post" action="">
    <h4>Question 1:</h4>
    <p>What is 6 - 11?</p>
    <input type="text" name="answer" id="answer" value="<?= $user_answer; ?>">
    <br>
    <span class="error" id="error"><?= $validation_error; ?></span>
    <br>
    <input type="submit" value="Submit Your Answer">
</form>
<div>
    <p id="answer-display">Your answer was: <?= $user_answer; ?></p>
    <p id="submission-response"><?= $submission_response; ?></p>
</div>

<?php
$validation_error = "";
$user_url = "";
$form_message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_url = $_POST["url"];

    if (filter_var($user_url, FILTER_SANITIZE_URL)) {

        $validation_error = "* This is an invalid URL";
        $form_message = "Please retry and submit your form again";
    } else {
        $form_message = "Thank you for your submission";
    }
}
?>

<form method="post" action="">
    Your Favorite Website:
    <br>
    <input type="text" name="url" value="<?php echo $user_url; ?>">
    <span class="error"><?= $validation_error; ?></span>
    <br>
    <input type="submit" value="Submit">
</form>
<p> <?= $form_message; ?> </p>
<?php
// using options with filter_var()

$message = "";
$month_error = "";
$day_error = "";
$year_error = "";

// Create your variables here:
$month_options = ["options" => ["min_range" => 1, "max_range" => 12]];

$day_options = ["options" => ["min_range" => 1, "max_range" => 31]];

$year_options = ["options" => ["min_range" => 1903, "max_range" => date("Y")]];


// Define your function here: type = string month/day/year
// $error. passed by reference. is the error message passed by input type
// $options_arr. the array being passed
function validateInput($type, &$error, $options_arr): bool
{
    if (!filter_var($_POST[$type], FILTER_VALIDATE_INT, $options_arr)) {
        $error = "* Invalid $type";
        return false;
    } else {
        return true;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Uncomment the code below:
    $test_month = validateInput("month", $month_error, $month_options);
    $test_day = validateInput("day", $day_error, $day_options);
    $test_year = validateInput("year", $year_error, $year_options);
    if ($test_month && $test_day && $test_year) {
        $message = "Your birthday is: {$_POST["month"]}/{$_POST["day"]}/{$_POST["year"]}";
    }
}

?>

<form method="post" action="">
    Enter your birthday:
    <br>
    Month: <input type="number" name="month" value="<?= $_POST["month"]; ?>">
    <span class="error"><?= $month_error; ?>		</span>
    <br>
    Day: <input type="number" name="day" value="<?= $_POST["day"]; ?>">
    <span class="error"><?= $day_error; ?>		</span>
    <br>
    Year: <input type="number" name="year" value="<?= $_POST["year"]; ?>">
    <span class="error"><?= $year_error; ?>		</span>
    <br>
    <input type="submit" value="Submit">
</form>
<p><?= $message; ?></p>


<!--using  regular expressions. matching them-->
<?php
$feedback = "";
$success_message = "Thank you for your donation!";
$error_message = "* There was an error with your card. Please try again.";

$card_type = " ";
$card_num = " ";
$donation_amount = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_type = $_POST["credit"];
    $card_num = $_POST["card-num"];
    $donation_amount = $_POST["amount"];

// Write your code here:
    if (strlen($card_num) < 100) {
        if ($card_type = "mastercard") {
            if (preg_match("/5[1-5][0-9]{14}/", $card_num) === 1) {
                $feedback = $success_message;
            } else {
                $feedback = $error_message;
            }
        }

        if ($card_type = "visa" && preg_match("/4[0-9]{12}([0-9]{3})?([0-9]{3})?/",
                        $card_num) === 1) {
            $feedback = $success_message;
        } else {
            $feedback = $error_message;
        }

    }
}
?>
<form action="" method="POST">
    <h1>Make a donation</h1>
    <label for="amount">Donation amount?</label>
    <input type="number" name="amount" value="<?= $donation_amount; ?>">
    <br><br>
    <label for="credit">Credit card type?</label>
    <select name="credit" value="<?= $card_type; ?>">
        <option value="mastercard">Mastercard</option>
        <option value="visa">Visa</option>
    </select>
    <br><br>
    <label for="card-num">Card number?</label>
    <input type="number" name="card-num" value="<?= $card_num; ?>">
    <br><br>
    <input type="submit" value="Submit">
</form>
<span class="feedback"><?= $feedback; ?></span>