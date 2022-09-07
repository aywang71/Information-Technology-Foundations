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

  		# Capture user selection of Employee title
  		$etitle = $_POST['etitle']; 
  	
  
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
			    
			print("<h2>List of ".$etitle."</h2>");
			$query = mysqli_query($dbconnect, "SELECT employees.* , jobs.job_title FROM employees INNER JOIN jobs on employees.job_id=jobs.job_id where jobs.job_title='$etitle'")
   		or die (mysqli_error($dbconnect));


			print("<h3>Employee Search Results</h3>");
 
			print("<table border='1' align='left'>
				<tr><td>EMP ID</td><td>First Name</td><td>Last Name</td><td>Job Code</td>
				<td>Job Title</td><td>Salary</td></tr>"); 
		
	   	$sum = 0.0;
	   	$count = 0;
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
   			$sum = $sum + $row['salary'];
   			$count = $count + 1;
			}  
			 				
			$dbconnect->close();
			$averageSalary = $sum/$count;
			print("<h3>Average salary wage: <b>$".number_format($averageSalary,2)."</b></h3>");
			print("</table>");
			print('<footer><a class="white" href="./groupI-hr-job-title.html"> Return to Employee Job Title Form Entry</a></footer>');
			
		?>  
	</div> <!--closes container-->
	
	
		
	</body>
</html>
