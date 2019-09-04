<?php
/*
Find all the perfect numbers under 10000!
*/
$sum=0;
$divs=[];
$perfect=[];
for($i=0; $i<10000; $i++){
	$sum=0;
	for($j=1; $j<=$i; $j++){
		if($i%$j==0){
			$sum+=$j;
		}
	}
	$divs[count($divs)]=$sum;
}
for($i=0; $i<=count($divs)-1; $i++){
	if(($divs[$i]-$i)==$i){
		if($i!=0){
			$perfect[count($perfect)]=$i;
		}
	}
}
for($i=0; $i<=count($perfect)-1; $i++){
	echo($perfect[$i]." ");
}
?>