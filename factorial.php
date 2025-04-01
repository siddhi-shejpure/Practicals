<?php
function factorial($num){
    if($num ==0 || $num ==1){
        return 1;
    }else {
        $factorial = 1;
        for($i=1; $i<=$num; $i++){
            
            $factorial *=$i;


        }return $factorial;
    }
}
$num = readline("Enter the number :");
echo "Factorial of $num is : ".factorial($num);

?>