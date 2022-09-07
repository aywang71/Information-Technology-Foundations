<!Doctype html>
<html lang="en">
<head>
<!--Name: Tripp
		Filename: groupI-hr-tbd.html
    Blackboard User Name: jwtripp
    Class Section: CTI.110.0001
    Purpose: A php file to provide a report
	-->
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TBD Report</title>
	<link href="groupI-hr-style.css" type="text/css" rel="stylesheet" />
	<style>
	a {color: black;
	}
	h3 {font-size: 30px;
	}
	</style>

</head>
<body>
<div class="container">

<?php

  $server = "localhost"; 
  $user = "cti110"; 
  $pw ="wtcc"; 
  $db = "hr";

  $conn = mysqli_connect($server, $user, $pw, $db);
  $job_Title = $_POST['job_Title'];

if($job_Title == 'country')
{
    $sql = "SELECT country_id, country_name FROM countries;"; 
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
  
    if ($resultCheck > 0) 
    {
      print("<h1>Here is your requested information!</h1>");
	  print("<table>");
	  print("<tr><th>Country ID</th><th>Country Name</th></tr>");
	  
	  While ($row = mysqli_fetch_assoc($result)) 
	   {
		print ("<tr><td>".$row['country_id']."</td><td>".$row['country_name']."</td></tr>");
	   } 
	  print("</table>");
	}
}
else if($job_Title == 'department')
{
	$sql = "SELECT department_id, department_name FROM departments;"; 
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
  
	  if ($resultCheck > 0) 
      {
        print("<h1>Here is your requested information!</h1>");
	    print("<table>");
	    print("<tr><th>Department ID</th><th>Department Name</th></tr>");
	  
	    While ($row = mysqli_fetch_assoc($result)) 
	      {
		   print ("<tr><td>".$row['department_id']."</td><td>".$row['department_name']."</td></tr>");
	      } 
	    print("</table>");
      }
}

?>

<br><footer><a class="white" href="groupI-hr-tbd.html"> Return To TBD Reports To Continue</a></footer>

</div>
</body>
</html>