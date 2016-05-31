<?php
//function myFunc4 receives 1 argument - string
function myFunc4($y) { 

$count = 0; 
//for each symbol of the string the following check is performed...
for($i = 0; $i < strlen($y); $i++) { 

$c = ord($y[$i]); 
// if ASCII code of the symbol is not in  range between 97 and 122 (is not a letter a-z)...
if($c < 97 || $c > 122) { 
//...$count is increased to +1 
$count++; 

} 

} 
//function myFunc4 returns $count

return $count;

}

//myFunc4('12345');