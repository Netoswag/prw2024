<?php
$X = intval(fgets(STDIN));
$Y = floatval(fgets(STDIN));

$consumo_medio = $X / $Y;
echo number_format($consumo_medio, 3, '.', '') . " km/l\n";
?>