<?php

    require "classes.php";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($senha) >= 8 && $senha == $confirmar_senha) {
        $conta = new Conta();
        $conta->__set('nome', $nome);
        $conta->__set('sobrenome', $sobrenome);
        $conta->__set('email', $email);
        $conta->__set('senha', $senha);
        $conexao = new Conexao();

        $contaService = new ContaService($conexao, $conta);
        $contas = $contaService->inserir();

        header('Location: cadastro.php?cadastro=cadastro_sucesso');
    } else {
        header('Location: cadastro.php?cadastro=erro_cadastro');
    }

?>