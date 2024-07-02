<?php
    $valor = $_POST['escolha'];
    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    if($valor == 1){echo "Soma = ",$num1+$num2;}
    elseif($valor == 2){ echo "Subtração = ",$num1-$num2;}
    elseif($valor == 3){ echo "Divisão = ",$num1/$num2;}
    elseif($valor == 4){ echo "Multiplicação = ",$num1*$num2;}
?>