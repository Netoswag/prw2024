<?php
    $areas = explode(" ", fgets(STDIN));
    $A = floatval($areas[0]);
    $B = floatval($areas[1]);
    $C = floatval($areas[2]);
    $PI = 3.14159;
    
    $A_triangle = ($A * $C)/2;
    $A_circle = $PI * pow($C,2);
    $A_trapeze = (($A + $B)*$C)/2; 
    $A_square = pow($B,2);
    $A_rectangle = $A * $B;
    
    echo "TRIANGULO: " . number_format($A_triangle, 3, '.', '') . "\n";
    echo "CIRCULO: " . number_format($A_circle, 3, '.', '') . "\n";
    echo "TRAPEZIO: " . number_format($A_trapeze, 3, '.', '') . "\n";
    echo "QUADRADO: " . number_format($A_square, 3, '.', '') . "\n";
    echo "RETANGULO: " . number_format($A_rectangle, 3, '.', '') . "\n";
?>