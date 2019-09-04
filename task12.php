<?php
/*
Find the longest word in the string! If there are more words with the same length, return with the first of them.
*/
$str="asd asdf as asd asdfg gfdsa ggggg asd as a";
$arr=explode(" ",$str);
$longest=strlen(max($arr));
$larr=[];
for($i=0; $i<=count($arr)-1; $i++){
	if(strlen($arr[$i])==$longest){
		$larr[count($larr)]=($arr[$i]." ");
	}
}
echo($larr[0]);
?>