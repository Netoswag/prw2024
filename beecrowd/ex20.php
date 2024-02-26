<?php
    $tempo_duracao = intval(trim(fgets(STDIN)));
    
    $horas = intval($tempo_duracao / 3600);
    $tempo_duracao %= 3600;
    $minutos = intval($tempo_duracao / 60);
    $segundos = $tempo_duracao % 60;
    
    echo "$horas:$minutos:$segundos\n";
?>