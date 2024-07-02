<?php
    echo "<h2>Saída</h2>";

    //$_GET['nome_campo_form_html']
    //$_POST['nome_campo_form_html']

    $ve = $_POST['vlmd'];
    $km = $_POST['dv'];
    $co = $_POST['cmdv'];
    $ho = number_format($km/$ve, 2, ".", "");
    $comb = number_format($km/$co, 2, ".", "");

    echo "Total horas: $ho<br>";
    echo "Total combustivel: $comb<br>";
?>