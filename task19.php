<?php
/*
Give me a number, I tell you the time.
*/
$number=602;
if(is_int($number)==true && ($number>=0)){
	if(!($number>1440)){
		$hours=intval($number/60);
		$minutes=$number%60;
	if($number==1440){
		$hours=0;
	}
	if($minutes<10){
		echo($hours.":"."0".$minutes);
	}else{
		echo($hours.":".$minutes);
	}
	}else{
		echo("There are only 24 hours in a day! (The value of 'number' must be between 0 and 1440...)");
	}
}else{
	echo("The value of 'number' must be a positive integer!");
}
?>