<?php
    $tempo_viagem = intval(trim(fgets(STDIN)));
    $velocidade_media = intval(trim(fgets(STDIN)));
    
    $d = $velocidade_media * $tempo_viagem;
    
    $litros_necessarios = $d / 12;
    echo number_format($litros_necessarios, 3, '.', '') . "\n";
?>