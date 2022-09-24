<?php
$n = 40;
$k = 0;
for ($i=0; $i <= $n; $i++) { 
//    $x = $n % $k;
$k = $k + 1;
   if ($n % $k != 0){
    continue; 
   }
   echo " $k ";
}