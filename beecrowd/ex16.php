<?php
    list($x1, $y1) = sscanf(trim(fgets(STDIN)), "%f %f");
    list($x2, $y2) = sscanf(trim(fgets(STDIN)), "%f %f");
    
    $D = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    
    echo number_format($D, 4, '.', '') . "\n";
?>