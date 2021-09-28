<?php

$a = 0; //start of the range
$b = 10; //end of the range
$total = 0; //served as sum

do{
	if ($a %2 != 0){ //if number is not divisible by 2
		$total = $total + $a; 
	}
	$a++;
}
while($a <= $b); //program will stop after this

echo $total; 

?>
