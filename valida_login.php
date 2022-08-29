<?php 

    session_start();

    require "classes.php";

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_tipo = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conta = new Conta();
    $conta->__set('email', $email);
    $conta->__set('senha', $senha);

    $conexao = new Conexao();

    $contaService = new ContaService($conexao, $conta);
    $contas = $contaService->verificaLogin();

    if($contas != null) {
        $usuario_autenticado = true;
        $usuario_id = $contas['id'];
        $usuario_tipo = $contas['tipo'];
    };

    if($usuario_autenticado) {
        echo 'Usuário Autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['tipo'] = $usuario_tipo;
        header('Location: index.php?login=logado');
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: login.php?login=erro');
    };

?>