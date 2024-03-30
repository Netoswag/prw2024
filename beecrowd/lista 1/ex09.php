<?php
    $NUMBER = intval(trim(fgets(STDIN)));
    $HORAS = intval(trim(fgets(STDIN)));
    $HWORK = doubleval(trim(fgets(STDIN)));
    $SALARY = $HORAS * $HWORK;
    
    echo "NUMBER = " . $NUMBER . "\n";
    echo "SALARY = U$ " . number_format($SALARY, 2, '.', '')."\n";
?>