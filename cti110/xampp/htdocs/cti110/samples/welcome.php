<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	welcome.php
		Purpose:PHP Practice
-->
<html>

<head>
	<title>Welcome!</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$birthMonth = $_POST['birthMonth'];
	$birthDay = $_POST['birthDay'];
	$interest1 = $_POST['interest1'];
	$interest2 = $_POST['interest2'];	
	$interest3 = $_POST['interest3'];	


	if (!empty($firstName) && !empty($lastName))
		print (" <h1>Welcome $firstName $lastName!</h1>");
	else if (!empty($firstName) )
		print (" <h1>Welcome $firstName!</h1>");
	else if (!empty($lastName) )
			print (" <h1>Welcome Somebody $lastName!</h1>");
	else
			print (" <h1>Welcome Whoever You Are!</h1>");

	switch ($birthMonth)
	{
		case 1: $month = "January"; break;
		case 2: $month = "February"; break;
		case 3: $month = "March"; break;
		case 4: $month = "April"; break;
		case 5: $month = "May"; break;
		case 6: $month = "June"; break;
		case 7: $month = "July"; break;
		case 8: $month = "August"; break;
		case 9: $month = "September"; break;
		case 10: $month = "October"; break;
		case 11: $month = "November"; break;
		case 12: $month = "December"; break;
	}

	if 	(($birthMonth == 2 && $birthDay > 29) || ($birthMonth == 4 && $birthDay > 30) ||
		 ($birthMonth == 6 && $birthDay > 30) || ($birthMonth == 9 && $birthDay > 30) ||
		 ($birthMonth == 11 && $birthDay > 30)
		)
			print("<p>Hmmm ... $month $birthDay ... you seem to have been
				born on a day that doesn't exist!</p>");

	else
	{
			if (($birthMonth == 12 && $birthDay >= 22) || ($birthMonth == 1 && $birthDay <= 19))
				$sign = "a Capricorn";
			elseif (($birthMonth == 1 && $birthDay >= 20) || ($birthMonth == 2 && $birthDay <= 18))
				$sign = "an Aquarius";
			elseif (($birthMonth == 2 && $birthDay >= 19) || ($birthMonth == 3 && $birthDay <= 20))
				$sign = "a Pisces";
			elseif (($birthMonth == 3 && $birthDay >= 21) || ($birthMonth == 4 && $birthDay <= 19))
				$sign = "an Aries";
			elseif (($birthMonth == 4 && $birthDay >= 20) || ($birthMonth == 5 && $birthDay <= 20))
				$sign = "a Taurus";
			elseif (($birthMonth == 5 && $birthDay >= 21) || ($birthMonth == 6 && $birthDay <= 20))
				$sign = "a Gemini";
			elseif (($birthMonth == 6 && $birthDay >= 21) || ($birthMonth == 7 && $birthDay <= 22))
				$sign = "a Cancer";
			elseif (($birthMonth == 7 && $birthDay >= 23) || ($birthMonth == 8 && $birthDay <= 22))
				$sign = "a Leo";
			elseif (($birthMonth == 8 && $birthDay >= 23) || ($birthMonth == 9 && $birthDay <= 22))
				$sign = "a Virgo";
			elseif (($birthMonth == 9 && $birthDay >= 23) || ($birthMonth == 10 && $birthDay <= 22))
				$sign = "a Libra";
			elseif (($birthMonth == 10 && $birthDay >= 23) || ($birthMonth == 11 && $birthDay <= 21))
				$sign = "a Scorpio";
			elseif (($birthMonth == 11 && $birthDay >= 22) || ($birthMonth == 12 && $birthDay <= 21))
				$sign = "a Sagittarius";

			print (" <p>Hmm, born on $month $birthDay .. I guess that makes you $sign </p> ");
	}


	if ( !empty($interest1) && !empty($interest2) && !empty($interest3) )
		$interests = "three interests: $interest1, $interest2 and $interest3.";
	elseif ( !empty($interest1) && !empty($interest2) )
		$interests = "two interests: $interest1 and $interest2.";
	elseif ( !empty($interest1) && !empty($interest3) )
		$interests = "two interests: $interest1 and $interest3.";
	elseif ( !empty($interest2) && !empty($interest3) )
		$interests = "two interests: $interest2 and $interest3.";
	elseif ( !empty($interest1) )
		$interests = "one interest: $interest1.";
	elseif ( !empty($interest2) )
		$interests = "one interest: $interest2.";
	elseif ( !empty($interest3) )
		$interests = "one interest: $interest3.";
	else
		$interests = " .. that you don't have <strong>ANY</strong> interests! Are you sure? ";

	print("<p>What else did you say about yourself .. You indicated $interests I hope
		that you find this course interesting, and useful, and that you find ways to apply
		what you learn to your personal goals.</p>");

	print (" <p><a href = \"welcome.html\">Return to the Welcome Form</a></p> ");

?>

</body>
</html>