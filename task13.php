<?php
/*
Replace every letter (only letters) in the string with the letter following it in the alphabet. Then capitalize every vowel in this new string.
*/
$x="Zb+cd";
$t=[];
for($i=0; $i<=strlen($x)-1; $i++){
	if((ord($x[$i])>=65 && ord($x[$i])<=89) || (ord($x[$i])>=97 && ord($x[$i]<=121))){
		$t[$i]=ord($x[$i])+1;
	}
	if(ord($x[$i])==90){
		$t[$i]=ord($x[$i])-25;
	}
	if(ord($x[$i]==122)){
		$t[$i]=ord($x[$i])-25;
	}
	if((ord($x[$i])<65) || (ord($x[$i])>122)){
		$t[$i]=ord($x[$i]);
	}
	if(ord($x[$i])+1==97 || ord($x[$i])+1==101 || ord($x[$i])+1==105 || ord($x[$i])+1==111 || ord($x[$i])+1==117){
		$t[$i]=ord($x[$i])+1-32;
	}
	$t[$i]=chr($t[$i]);
	echo($t[$i]);
}
?>