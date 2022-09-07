<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Trip Cost</title>
  <link href="groupI-hr-style.css" type="text/css" rel="stylesheet"/>
  <style>
    li {padding: 10px; margin-right:30px}
  </style>
</head>
<body>
<div class="container">

<?php
  
  #Receive inputs values from HTML form and declare variables
  $average = $_POST['average'];
  $cost = $_POST['cost'];
  $length = $_POST['length'];
  
  #Pass form data into validator to ensure miles per gallon is not zero or negative.
  inputValidator($average, $cost, $length);

  /*createReport function. Receives the form input data and results of calculations. It then displays the report output required */
  function createReport($average, $cost, $length, $totalCost)
  {
    print ("<header><h1>Trip Details</h1></header>");
    print ("<p>With your car's average of <b>".$average." miles per gallon </b> and an expected gas cost of <b> $".$cost." gallon</b>. and a trip length of ".$length." miles, your total trip cost is:  <b>$" .number_format($totalCost, 2)."</b></p>");
    print ('<br><footer><a class="white" href="groupI-hr-fuel.html"> Return to Trip Form Entry</a></footer>');
  }
  
  #This function is called if the miles per gallon is zero or less. 
  function createErrorReport()
  {
	  print("<header><h1>Trip Calculator Error</h1></header>");
	  print("<p>Average miles per gallon cannot be 0 or negative.</p>");
	  print ('<br><footer><a class="white" href="groupI-hr-fuel.html"> Return to Trip Form Entry</a></footer>'); 
  }

  #This function takes in the input from the form, checks to see if the miles per gallon is zero or less,
  #If the miles per gallon is valid, computes the cost, and prints results. If not, prints error message.
  function inputValidator($average, $cost, $length)
  { 
     if ($average > 0)
	 {
		 $totalCost = $length/$average*$cost;
		 createReport($average, $cost, $length, $totalCost);
	 }
	 else 
	 {
		 createErrorReport();
	 }
  }

?>
  
</div> <!--closes container-->
</body>
</html>

