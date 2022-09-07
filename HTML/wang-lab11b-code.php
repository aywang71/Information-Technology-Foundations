<?php

function calcCost($tAX, $aDULTcost, $cHILDcost, $mINfee, $mAXfee, $adultTickets, $childTickets, $date, $name, $phone, $aTTEND) {
    $totalTickets = $childTickets + $adultTickets;
    if ($totalTickets <= $aTTEND) {
        $fee = $totalTickets * $mAXfee;
    } else {
        $fee = $totalTickets * $mINfee;
    }
    $subTotal = $adultTickets * $aDULTcost + $childTickets * $cHILDcost;
    $salesTax = $subTotal * $tAX;
    $totalCost = $subTotal + $salesTax + $fee;
    createReport($name, $phone, $adultTickets, $childTickets, $date, $subTotal, $salesTax, $fee, $totalCost);
}

function concertDetails($tAX, $aDULTcost, $cHILDcost, $mINfee, $mAXfee, $aTTEND) {
    $adultTickets = $_POST['adultTickets'];
    while ($adultTickets <= 0) {
        $adultTickets = $_POST['adultTickets'];
    }
    if ($adultTickets != 999) {
        $date = $_POST['date'];
        while ($date != "Apr" && $date != "May" && $date != "Jun" && $date != "999") {
            errorMsg();
            $date = $_POST['date'];
        }
        if ($date != "999") {
            $childTickets = $_POST['childTickets'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            calcCost($tAX, $aDULTcost, $cHILDcost, $mINfee, $mAXfee, $adultTickets, $childTickets, $date, $name, $phone, $aTTEND);
        }
    }
}

function createReport($name, $phone, $adultTickets, $childTickets, $date, $subTotal, $salesTax, $fee, $totalCost) {
    $location = $_POST['location'];
    echo "<html>";
    echo "<link href=\"wang-lab11b-style.css\" type=\"text/css\" rel=\"stylesheet\" />";
    echo "<body>";
    echo "<div class = \"container\">";
    echo "<header class = \"white\"> <h1> Summary Ticket Cost for Concert </h1> </header>";
    echo "Thank you <b> " . $name . " </b> at <b> " . $phone . "</b>. Details of your total cost <b> " . $totalCost . " </b> are shown below: <br><br>";
    echo "<ul> Adult Tickets: " . $adultTickets ." </ul>";
    echo "<ul> Child Tickets: " . $childTickets ." </ul>";
    echo "<ul> Date: " . $date ." 2022 </ul>";
    echo "<ul> Location: " . $location . "</ul>";
    echo "<ul> Sub-total: $ " . number_format($subTotal,2) . " </ul>";
    echo "<ul> Sales tax: $" . number_format($salesTax,2) . " </ul>";
    echo "<ul> Fee: $" . number_format($fee,2) . " </ul>";
    echo "<br>";
    echo "<ul><b> TOTAL: $" . number_format($totalCost,2) ." </b></ul>";


    echo "<footer> <a href =\"wang-lab11b-form.html\" class = \"white\">  Return to form entry to continue </a> </footer>";
    echo "</body>";
    echo "</html>";
}

function errorMsg() {
    echo "You must have at least one adult ticket. You must choose one of the allowed dates which are Mar, Apr and May.  Input 999 to exit." . PHP_EOL;
} 

# Main
# T1:Adults 0, child 2 Allows re-entry
# T1a: 999 allows exit
# T2: Adults 2, child 0. Wrong Date.  Allows re-entry
# T2a: 999 allows exit
# T3: adults 2 , child 2. Subtotal = 124.50. Tax = 8.715 , fee = 5,total cost = 138.215 Test 5 or less  NO to continue
# T4: adults 3, child 2.  Subtotal = 150.00, Tax=10.15, fee = 5 for Total Cost = 165.  Attending=5 Any key to exit
# T5: adults 3 child 3 subtotal=186.75 tax = 13.0725 fee= 3 totalcost = 202.8225
$tAX = 0.07;
$aDULTcost = 36.75;
$cHILDcost = 25.50;
$mINfee = 0.50;
$mAXfee = 1.00;
$aTTEND = 5;
concertDetails($tAX, $aDULTcost, $cHILDcost, $mINfee, $mAXfee, $aTTEND);
?>
