<?php
/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
Find the sum of all the multiples of 3 or 5 below 1000.
*/
$sum3=0;
$sum5=0;
$sum15=0;
for($i=0; $i<1000; $i+=3){
	$sum3+=$i;
}
for($i=0; $i<1000; $i+=5){
	$sum5+=$i;
}
for($i=0; $i<1000; $i+=15){
	$sum15+=$i;
}
echo(($sum3+$sum5)-$sum15);
?>
