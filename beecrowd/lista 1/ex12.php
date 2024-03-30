<?php
   $R = doubleval(trim(fgets(STDIN)));
   $PI = 3.14159;
   $V = (4/3.0) * $PI * ($R*$R*$R);
   
   echo "VOLUME = " . number_format($V, 3,'.', '') . "\n";
?>