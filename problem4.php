<?php 
// Write your fizzBuzz function here

function fizzBuzz($num){
    $return_number="";
    if(($num % 3)==0) $return_number="Fizz";
    if(($num % 5)==0) $return_number="Buzz";
    if($return_number=="") $return_number=$num;

    return $return_number;
}

for ($i = 1; $i <= 15; $i += 2) echo fizzBuzz($i). nl2br("\n");