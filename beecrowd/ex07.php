<?php
    $a = doubleval(trim(fgets(STDIN)));
    $b = doubleval(trim(fgets(STDIN)));
    $c = doubleval(trim(fgets(STDIN)));
    $MEDIA = (($a * 2) + ($b * 3) + ($c * 5))/10;
    
    echo "MEDIA = " . number_format($MEDIA, 1, '.', '') . "\n";
?>