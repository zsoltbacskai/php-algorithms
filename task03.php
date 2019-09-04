<?php
/*
The prime factors of 13195 are 5, 7, 13 and 29.
What is the largest prime factor of the number 600851475143 ?
*/
$p=0;
$t=0;
for($i=2; $i<=10000; $i++){
	$p=0;
	for($j=1; $j<=$i; $j++){
		if($i%$j==0){
			$p++;
		}
	}
	if($p<=2 && 600851475143%$i==0){
		$t=[$i];
	}	
}
echo($t[0]);
?>