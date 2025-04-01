<?php
function palindrome($str){
	$length = strlen($str);
	$start = 0;
	$end = $length-1;
	while($start < $end){
		if($str[$start]!=$str[$end]){
			return false;
		}
		$start++;
		$end--;
	}
	return true;
}
$str = readline("Enter the String :");
if(palindrome($str)){
	echo "Given string is palindrome !";
}else{
	echo "Given String is not Palindrome !";
}
?>