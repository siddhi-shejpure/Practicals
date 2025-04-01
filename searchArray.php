<?php
$color=['red','green','blue','yellow'];
$search=readline("Enter the color you want to search: ");
$found = false;
for($i=0;$i<count($color);$i++){
    if($color[$i]==$search){
        $found = true;
        break;
    }
}
if($found){
    echo "Color found at index: $i\n";
}else{
    echo "Color not found\n";
}

?>