<?php
    $a = intval(trim(fgets(STDIN)));
    $b = intval(trim(fgets(STDIN)));
    $c = intval(trim(fgets(STDIN)));
    $d = intval(trim(fgets(STDIN)));
    $DIFERENCA = (($a * $b) - ($c * $d));
    
    echo "DIFERENCA = " . $DIFERENCA ."\n";
?>