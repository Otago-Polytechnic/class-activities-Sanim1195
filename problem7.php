<?php

 
// Function to convert hours into minutes and seconds
function ConvertHours($h,$m)
{
    return ($h * 3600)+
    ($m * 60);
    

   
    
}
// Driver code and calling the function 

echo ConvertHours(1, 3);
 

?>