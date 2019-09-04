<?php
/*
Return the string with the letters in alphabetical order. Assume numbers and other symbols will not be included in the string.
*/
$str="gsazfe";
$t=[];
for($i=0; $i<=strlen($str)-1; $i++){
	if(!(ord($str[$i])>=97 && ord($str[$i])<=122)){
		echo("Only a-z characters please...");
		break;
	}
}
for($i=0; $i<=strlen($str)-1; $i++){
	$t[$i]=ord($str[$i]);
}
sort($t);
for($i=0; $i<=strlen($str)-1; $i++){
	$t[$i]=chr($t[$i]);
	$str[$i]=$t[$i];
}
echo($str);
?>