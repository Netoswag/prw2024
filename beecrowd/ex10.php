<?php
    $nome_vendedor = readline();
    $salario_fixo = floatval(trim(fgets(STDIN)));
    $total_vendas = floatval(trim(fgets(STDIN)));
    
    $comicao = $total_vendas * 0.15;
    $salario_total = $salario_fixo + $comicao;
    
    echo "TOTAL = R$ " . number_format($salario_total, 2, '.', '') . "\n";
?>