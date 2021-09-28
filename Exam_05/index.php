<?php

//variable that holds the word, change to test other word
$insert = "Car";

echo reverse($insert); //calls the reverse function

function reverse($word){ //reverse function
	return strrev($word);
}

?>
