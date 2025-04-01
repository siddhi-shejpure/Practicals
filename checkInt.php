<?php
function checkNUM(){
    $num1 = readline("Enter numb1:");
    $num2 = readline("Enter numb2:");
    if($num1+$num2 ==30){
        return true;
    }elseif($num1 ==30 || $num2 ==30 ){
        return true;
    }
}
if(checkNUM()){
    echo "true";
}else{
    echo "false";
}
?>