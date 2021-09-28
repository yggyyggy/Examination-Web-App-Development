<?php

//variable that holds the word, change to test other word
$insert = "madam";

//condition that identifies the word
if(checker($insert) == true){ //calls the checker function
	echo $insert, " is a palindrome!";
}
else
	echo $insert, " is not a palindrome!";

//function that checks the word
function checker($word){
	if (strrev($word) == $word){
		return true; 
	}
	else{
		return false; //returns the condition
	}
	}
	
?>
