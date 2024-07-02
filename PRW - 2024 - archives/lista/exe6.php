<?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nome = $_POST['name'];
    $frequencia = $_POST['frequencia'];

    echo 'Nome = ', $nome;
    echo '<br>Primeira Nota =', $nota1;
    echo '<br>Segunda Nota =', $nota2;
    if((($nota1+$nota2)/2)>= 5 and $frequencia >= 75){ echo "<br><span style='color:green;'>Aprovado</span>";}
    elseif((($nota1+$nota2)/2) < 5){ echo "<br><span style='color:red;'>Reprovado por Nota</span>";}
    elseif($frequencia < 75){ echo "<br><span style='color:red;'>Reprovado por Frequência</span>";}
?>