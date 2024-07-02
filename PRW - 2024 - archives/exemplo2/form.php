<body>
<?php
    echo "<h2>Cadastro</h2>";

    //$_GET['nome_campo_form_html']
    //$_POST['nome_campo_form_html']

    $username = $_POST['username'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    echo "<p>Username:$username<br>Nome:$nome<br>Senha:$senha<br>Email:$email<br>Cidade:$cidade<br>Estado:$estado</p>";
    $erro=0;
    if(strlen($username)<5)
    {
        echo "O username deve possuir no mínimo 5 caracteres.<br>"; 
        $erro=1;
    }
    if(strlen($senha)<5)
    { 
        echo "A senha deve possuir no mínimo 5 caracteres.<br>"; 
        $erro=1;
    }
    if(empty($cidade))
    { 
        echo "Favor digitar sua cidade<br>"; 
        $erro=1;
    }
    if(strlen($estado)!=2)
    { 
        echo "Favor digitar seu estado corretamente<br>"; 
        $erro=1;
    }
        //VERIFICA SE NÃO HOUVE ERRO
    if($erro==0)
    { 
        echo "Todos os dados foram digitados corretamente!<br>";
    }
?>
</body>