<?php
    $a = doubleval(trim(fgets(STDIN)));
    $b = doubleval(trim(fgets(STDIN)));
    $MEDIA = (($a * 3.5) + ($b * 7.5))/(3.5 + 7.5);
    
    echo "MEDIA = " . number_format($MEDIA, 5, '.', '') . "\n";
?>