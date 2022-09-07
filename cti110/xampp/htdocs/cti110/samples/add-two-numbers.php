<!DOCTYPE html>

<html>

<head>
	<title>Add Two Numbers - RESULTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	
	$result = $number1 + $number2;

	print ("<h1> RESULTS </h1>");

	print (" <p>$number1 + $number2 = $result.</p> ");

	print (" <p><a href = \"add-two-numbers.html\">Return to the Input Form</a></p> ");

?>

</body>
</html>