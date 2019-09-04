<?php
/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
Find the largest palindrome made from the product of two 3-digit numbers.
*/
for($i=100; $i<1000; $i++){
	for($j=1000; $j>=100; $j--){
		if(($i*$j)/100000>=1){
			if( (($i*$j)%10) == parseInt(($i*$j)/100000) && parseInt(($i*$j)%100/10) == parseInt(($i*$j)/10000%10) && parseInt((($i*$j)/1000)%10) == parseInt(($i*$j)%1000/100) ){
				if(parseInt(($i*$j)/100000)==9){
					echo($i*$j." ");
	}
}
?>