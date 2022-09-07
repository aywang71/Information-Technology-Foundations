<!DOCTYPE html>
<html lang="en">
	<head>
  	<meta charset="utf-8" />
  	<title>Employee Search</title>
  	<link href="groupI-hr-style.css" type="text/css" rel="stylesheet"/>
  	<style>
    	li {padding: 10px; margin-right:30px}
  	</style>
	</head>

	<body>
		<div class="container">

		<?php

  		# Capture user selection of last name or employee ID search, along with last name or ID.
  		$stype = $_POST['stype']; #$stype will either be "LName" or "EID"
  		$evalue = $_POST['lname']; #$evalue will either hold the lastname or employee ID depending on $stype.
  
  		# Define the machine, username, password, database, and db table to execute SQL search from
  		$hostname = "localhost";
  		$username = "cti110";
  		$password = "wtcc";
  		$db = "hr";
  
  		# Connect to database and create report output in table
  
  		$dbconnect=mysqli_connect($hostname,$username,$password,$db);

			if ($dbconnect->connect_error) {
				die("Database connection failed: " . $dbconnect->connect_error);
			}
			
			if ($stype == "last_name") {	    
				print("<h2>Search Completed By Last Name: ".$evalue."</h2>");
				$query = mysqli_query($dbconnect, "SELECT employees.* , jobs.job_title FROM employees INNER JOIN jobs on employees.job_id=jobs.job_id where last_name='$evalue'")
   			or die (mysqli_error($dbconnect));
			}
			else {
				print("<h2>Search Completed By Employee ID: ".$evalue."</h2>");
				$query = mysqli_query($dbconnect,"SELECT employees.* , jobs.job_title FROM employees INNER JOIN jobs on employees.job_id=jobs.job_id where employee_id='$evalue'")
   			or die (mysqli_error($dbconnect));
			}

			print("<h3>Employee Search Results</h3>");
 
			print("<table border='1' align='left'>
				<tr><td>EMP ID</td><td>First Name</td><td>Last Name</td><td>Job Code</td>
				<td>Job Title</td><td>Salary</td></tr>"); 
		
	   			
			while ($row = mysqli_fetch_array($query)) {
  			echo
   				"<tr>
    				<td>{$row['employee_id']}</td>
    				<td>{$row['first_name']}</td>
    				<td>{$row['last_name']}</td>
    				<td>{$row['job_id']}</td>
    				<td>{$row['job_title']}</td>
    				<td>{$row['salary']}</td>
   				</tr>";
			}  
			 				
			$dbconnect->close();
			print("</table>");
			print('<footer><a class="white" href="groupI-hr-portal.html"> Return to Employee Search Form Entry</a></footer>');
		?>  
	</div> <!--closes container-->
	
	
		
	</body>
</html>
