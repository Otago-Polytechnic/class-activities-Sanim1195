<?php
function is_anagram($a, $b)
 {
       if (count_chars($a, 1) == count_chars($b, 1))
    {
        return "True <br>";
    }
    else
    {
        return "false";
    }
 }
echo (is_anagram('elvis','lives') );
echo (is_anagram('cat','sat')."\n"); 
?>
