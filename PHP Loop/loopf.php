<?php

$a = 1; //start of the range
$b = 10; //end of the range 
$first = 0; //first number
$sec = 1; // second number
$total = 0; 

for($a; $a <= $b; ++$a)//while condition is not met, keep on adding
{
	echo $total;
	echo "<br>";
	$total = $first + $sec; //total is the sum of 1st and 2nd number
	$first = $sec; //the next 1st number is the 2nd number last time
	$sec = $total; 
}
?>
