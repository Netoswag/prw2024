<?php
    $idade_dias = intval(trim(fgets(STDIN)));
    
    $anos = intval($idade_dias / 365);
    $idade_dias %= 365;
    $meses = intval($idade_dias / 30);
    $dias = intval($idade_dias % 30);
    
    echo "$anos ano(s)\n";
    echo "$meses mes(es)\n";
    echo "$dias dia(s)\n";
?>