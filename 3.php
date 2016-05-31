<?php
//function myFunc() receives 2 arguments: string and array
function myFunc($haystack, $needles)

    {
//for each item of array $needles the following check is performed..
        foreach ((array) $needles as $needle) {
//if item of array $needles is not empty and item of array $needles is a substring of $haystack...
            if ($needle != '' && strpos($haystack, $needle) !== false) {
//myFunc() returns true
               return true;
           

            }

        }
// in other case myFunc() returns false
        return false;

    }
    
 //   myFunc('abcdefgabcabc', ['g','bc']);