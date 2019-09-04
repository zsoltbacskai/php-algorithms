<?php
/*
Capitalize the first letter of each word. Words are seperated by only one space.
*/
$str="ab [d ef Gh if";
$t=str_split($str);
for($i=0; $i<=count($t)-1; $i++){
	$t[$i]=ord($t[$i]);
}
if($t[0]>=97 && $t[0]<=122){
	$t[0]=$t[0]-32;
}
for($i=0; $i<=strlen($str)-1; $i++){
	if($t[$i]==32 && ($t[$i+1]>=97 && $t[$i+1]<=122)){
		$t[$i+1]=$t[$i+1]-32;
	}
	$t[$i]=chr($t[$i]);
	$str[$i]=$t[$i];
}
echo($str);
?>