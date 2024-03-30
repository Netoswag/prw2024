<?php
$valor = floatval(fgets(STDIN));

// Convertendo o valor para centavos (para evitar problemas com arredondamento)
$valor_centavos = $valor * 100;

// Arrays contendo os valores das notas e moedas disponíveis
$notas = array(10000, 5000, 2000, 1000, 500, 200); // Em centavos
$moedas = array(100, 50, 25, 10, 5, 1); // Em centavos

// Inicializando os contadores de notas e moedas
$contador_notas = array_fill(0, count($notas), 0);
$contador_moedas = array_fill(0, count($moedas), 0);

// Calculando o número de notas necessárias
for ($i = 0; $i < count($notas); $i++) {
    $contador_notas[$i] = intval($valor_centavos / $notas[$i]);
    $valor_centavos %= $notas[$i];
}

// Calculando o número de moedas necessárias
for ($i = 0; $i < count($moedas); $i++) {
    $contador_moedas[$i] = intval($valor_centavos / $moedas[$i]);
    $valor_centavos %= $moedas[$i];
}

// Exibindo a quantidade mínima de notas necessárias
echo "NOTAS:\n";
for ($i = 0; $i < count($notas); $i++) {
    echo $contador_notas[$i] . " nota(s) de R$ " . number_format($notas[$i] / 100, 2) . "\n";
}

// Exibindo a quantidade mínima de moedas necessárias
echo "MOEDAS:\n";
for ($i = 0; $i < count($moedas); $i++) {
    echo $contador_moedas[$i] . " moeda(s) de R$ " . number_format($moedas[$i] / 100, 2) . "\n";
}

?>