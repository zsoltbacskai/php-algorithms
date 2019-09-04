<?php
/*
A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
a^2 + b^2 = c^2
For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.
*/
for($i=1; $i<=500; $i++){
	for($j=$i; $j<=500; $j++)
		for($k=$j; $k<=500; $k++){
			if($i+$j+$k==1000){
				if($i*$i+$j*$j==$k*$k){
					echo($i*$j*$k);
				}
		}
	}
}
?>