<?php
/*
n! means n * (n − 1) * ... * 3 * 2 * 1
For example, 10! = 10 * 9 * ... * 3 * 2 * 1 = 3628800,
and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
Find the sum of the digits in the number 20!
*/
$n=20;
$x=1;
$sum=0;
$j=1;
for($i=1; $i<=$n; $i++){
	$x*=$i;
}
$y=$x;
while($y>10){
	$y/=10;
	$j*=10;
}
for($i=$j; $i>=1; $i/=10){
	$sum+=(intval($x/$i)%10);
}
echo($sum);
?>