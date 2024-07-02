<?php
    $horario = $_POST['horario'];
    $nome = $_POST['name'];

    if($horario <= '12:00'){ echo "Bom dia $nome";}
    elseif($horario <= '18:00'){ echo "Bom tarde $nome";}
    else{ echo "Boa Noite $nome";}
?>