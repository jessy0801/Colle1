<?php
$square_completed = array();
 function find_magic_square( $square_base, &$square_completed) {
     $arr = array();
     $i=0;
     for ($x = 0; $x < 4 ; $x++) {
         array_push($arr , []);
         for ($y = 0; $y < 4 ; $y++) {
             if (isset($square_base[$i])) {
                 array_push($arr[$x] , $square_base[$i]);
                 $i++;
             } else {
                 array_push($arr[$x], '0');
             }
         }
     }

     var_dump($arr);
 }
 find_magic_square(array(16,2,3,13,5,11,10,8), $square_completed);