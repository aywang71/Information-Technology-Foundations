<?php

function createReport($month, $balance) {
    echo "<tr> <td>" . $month . "</td> <td>" . $balance . "</td> </tr>";
}


function loanReport($loanAmt, $payment) {
    $balance = $loanAmt;
    $month = 0;
    echo "<table>";
    echo "<thead> <tr> <th>Month</th><th>Balance</th> </tr> </thead>";
    echo "<tbody>";
    while ($balance > 0) {
        $balance = $balance - $payment;
        $month = $month + 1;
        if ($balance < 0) {
            $balance = 0;
        }
        createReport($month, $balance);
    }
    echo "</tbody>";
    echo "</table>";
}

# Main
# T1: LA = 1001 Pymt = 100… 11 months till 0.
# T2: LA =2079.50 Pymt = 231.20…9 months till 0
# T3: LA = 4000 Pymt 250…16 months till 0
$loanAmt = $_POST['loanAmt'];
$payment = $_POST['pymtAmt'];
echo "<html>";
echo "<style>";
echo "table,th, td {
	border: 2px solid black;
    text-align: center;
	}
	
table {
	width:35%;
	float:left;}";

echo "</style>";
echo "<link href=\"wang-asgn11a-style.css\" type=\"text/css\" rel=\"stylesheet\" />";
echo "<body>";
echo "<div class = \"container\">";
echo "<header class = \"white\"> <h1> Welcome to Your Loan Company </h1> </header>";
echo "<h3> Your Original Loan Amount was: " . $loanAmt ."</h3>";
loanReport($loanAmt, $payment);
echo "<p> Thank you - Programmer is: Wang";
echo "<footer> <a href =\"wang-asgn11a-form.html\" class = \"white\">  Return to form entry to continue </a> </footer>";
echo "</body>";
echo "</html>";
?>
