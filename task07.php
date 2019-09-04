<?php
/*
By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
What is the 1001st prime number?
*/
$i=1;
$p=0;
$x=1;
while($x<=1001){
	$i+=2;
	$p=0;
	for($j=1; $j<=$i; $j+=2){
		if($i%$j/2==0){
			$p++;
		}
	}
	if($p==2){
		$x++;
		if($x==1001){
			echo($i);
		}
	}
}
?>