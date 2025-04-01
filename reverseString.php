<?php
$str = readline("Enter the String : ");
function rev($str){
	$length = strlen($str);
	$newstr= "";
	for($i=$length-1;$i>=0;$i--){
		$newstr.=$str[$i];
	}
	return $newstr;

}
echo "The reverse of the string without using inbuilt is : ".rev($str)."\n";
echo "The reverse of the string with inbuilt function is : ".strrev($str)."\n";
?>