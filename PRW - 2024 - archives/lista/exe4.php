<?php
    $text = $_POST['texto'];

    if($text%4== 0 and $text%100 != 0 or $text%400 == 0){ echo "Sim é um ano bissextos";}
    else{ echo "Não é um ano bissextos";}
?>