<?php
# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().
function input() {
    return fgets(STDIN);
}

# This program calculates net pay and produces a Payroll Report. It can only be run once.
# In Flowgorithm you can combine declarations as long as they are the SAME data type.
$rATE = 0.25;
echo "Your name" . PHP_EOL;
$name = input();
echo "Your Gross" . PHP_EOL;
$gross = input();
echo "Payroll Report" . PHP_EOL;
echo "Name     Gross     Deductions     Net: " . PHP_EOL;
$deduct = $gross * $rATE;
$net = $gross - $deduct;
echo $name . "     " . $gross . "          " . $deduct . "             " . $net . PHP_EOL;
echo "***End of Report" . PHP_EOL;
?>
