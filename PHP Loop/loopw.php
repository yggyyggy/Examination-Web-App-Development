<?php

$a = 0; //start of the range
$b = 10; //end of the range
$total = 0; //served as sum

while ($a <= $b){ 
	if ($a %2 == 0){ //if the number is divisible by 2
		$total = $total + $a; //it will add to the total
	}
	$a++;
}

echo $total; 

?>
