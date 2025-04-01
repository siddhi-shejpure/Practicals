<?php
$multyarray =[[1,2,3],[4,5,6],[7,8,9]];
echo "Original array";
print_r($multyarray);
echo "Enter the position for deleting element:\n";
$m = readline("Enter the row number: ");
$n = readline("Enter the column number: ");
echo "Specific element to delete: " . $multyarray[$m][$n] . "\n";
unset($multyarray[$m][$n]);
echo "After deleting the specific element:\n";
print_r($multyarray);
?>