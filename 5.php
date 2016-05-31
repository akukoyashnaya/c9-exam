<?php
//function myFunc3 receives 1 argument - string
function myFunc3($arr)

    {
// explode() splits $arr to array according to delimiter '/'
        $segments = explode('/', $arr);
//1.array_filter() returns only not empty items of array $segments
//2.then array_values() take resulting array of array_filter() execution and converts it to plain array with numerical keys (change keys to 0,1,...)
       
      return array_values(array_filter($segments, function ($v) {

            return $v != '';

        }));
    }
    
 //   myFunc3('11/2/3/4/5');