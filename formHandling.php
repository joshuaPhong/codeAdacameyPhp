<?php
// <?php echo can be shortened to <?=
// REQUEST SUPER GLOBALS. available in all scopes
// $_GET - this contains an associative array of variables passed to the current script using query parameters in the URL
//$_POST - this contains an associative array of variables passed to the current script using a form submitted using the “POST” method
//$_REQUEST - this contains the contents of $_GET, $_POST, and $_COOKIE

?>
<!--action="" default is self-->
<!--action="" will send the user to the specified page on submit-->
<html>

<body>
$_REQUEST:
<?php print_r($_REQUEST); ?>
<br>
$_GET:
<?php print_r($_GET["get_name"]); ?>
<br>
$_POST:
<?php print_r($_POST["post_name"]); ?>
<form method="get">
    GET Form: <input type="text" name="get_name">
    <input type="submit" value="Submit GET">
</form>
<form method="post">
    POST Form: <input type="text" name="post_name">
    <input type="submit" value="Submit POST">
</form>
<div>
    <P>Your get name is: <?= $_GET["get_name"]; ?></P>
    <p>Your post name is: <?= $_POST["post_name"]; ?></p>
</div>
<a href="formHandling.php">Reset</a>
</body>

</html>