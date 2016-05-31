<?php
//function myFunc2 receives 2 arguments (arrays)
function myFunc2($array, $keys)

    {
// 1. function array_flip() reverses keys and values of array $keys
// 2. function array_intersect_key() returns items from $array, which have common keys with reversed $key
// 3. function myFunc2() returns results of execution of p.2.
       
        return array_intersect_key($array, array_flip((array) $keys));
        

    }
    
//myFunc2 (['a'=>1, 'b'=>2, 'c'=>3],['b','c']);    