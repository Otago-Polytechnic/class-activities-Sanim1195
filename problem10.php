<?php
function is_prime($number){
    $count=0;
    for($i=2;$i<=$number;$i++){
        if(($number % $i)==0) $count++;
    }

    if($count==1) return true;
    else return false;
}

echo "Is 11 prime? ";
var_export(is_prime(11));
echo nl2br("\n\n");

echo "Is 18 prime? ";
var_export(is_prime(18));
echo nl2br("\n\n");

?>