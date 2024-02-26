<?php
$valor = intval(fgets(STDIN));

$notas = array(100, 50, 20, 10, 5, 2, 1);
echo $valor . "\n";

// Iterando = Iterar significa repetir um processo várias vezes, 
//geralmente seguindo um padrão 
//ou percorrendo uma série de elemento --> percore as arrays.
foreach ($notas as $nota) {
    
    $quantidade = intval($valor / $nota);
    
    $valor %= $nota;
    
    
    echo $quantidade . " nota(s) de R$ " . number_format($nota, 2, ',', '') . "\n";
}

?>