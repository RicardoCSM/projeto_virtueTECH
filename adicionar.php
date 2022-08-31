<?php 

    require "classes.php";

    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    if($tipo == 'console') {
        $tipo = 1;
    } else if($tipo == 'smartphone') {
        $tipo = 2;
    } else if($tipo == 'acessorio') {
        $tipo = 3;
    } else {
        $tipo = 4;
    }

    $produto = new Produto();
    $produto->__set('tipo', $tipo);
    $produto->__set('nome', $nome);
    $produto->__set('imagem', $imagem);
    $produto->__set('descricao', $descricao);
    $produto->__set('preco', $preco);
    $conexao = new Conexao();

    $produtoService = new ProdutoService($conexao, $produto);
    $produtos = $produtoService->adicionar();

    header('Location: adicao.php');

?>