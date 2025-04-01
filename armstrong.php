<?php
function arm($num){
    $sum = 0;
    $temp = $num;
    while($temp != 0){
        $digit = $temp % 10;
        $sum += pow($digit, strlen((string)$num));
        $temp = (int)($temp / 10);
    }
    return $sum == $num;
}
$num = readline("Enter the number :");
echo arm($num) ? "Armstrong" : "Not Armstrong";
?>