<?php
/*
Find the last four digits of the series: 1^1 + 2^2 + 3^3 + ... + 10^10.
*/

$sum=0;
$magnitude=1;
$t=[];
for($i=1; $i<=10; $i++){
	$sum+=pow($i,$i);
}
$temp=$sum;
while($temp>=10){
	$temp/=10;
	$magnitude*=10;
}
for($i=$magnitude; $i>=1; $i/=10){
	$t[count($t)]=intval((($sum/$i)%10));
}
for($i=4; $i>=1; $i--){
	echo($t[count($t)-$i]);
}
?>