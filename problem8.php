<?php
// PHP code to check for Palindrome string in PHP
// Using strrev()
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
// Driver Code
$original = "A man a plan a canal Panama";
if(Palindrome($original)){ 
    echo "False"; 
}
else { 
echo "True"; 
}
?> 