<?php
function is_five_letters($string_array){
    $num=0;
    foreach($string_array as $x){
        if(strlen($x)==5) {
            $return_str_array[$num]=$x;
            $num++;
        }
    }
    return $return_str_array;
}

$result = is_five_letters(["car", "bike","truck"]);
//$result = is_five_letters(["car", "bike","truck","abcde"]);

foreach($result as $x) echo nl2br("$x\n");

// Expected output:
// ["truck"]

?>