<?php 
    function print_r2($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }

    require "classes.php";

    if($tipo == 'todosProdutos') {
        $produto = new Produto();
        $conexao = new Conexao();

        $produtoService = new ProdutoService($conexao, $produto);
        $produtos = $produtoService->recuperar();
    } else {
        $produto = new Produto();
        $conexao = new Conexao();

        $produtoService = new ProdutoService($conexao, $produto);
        $produtos = $produtoService->recuperarTipo($tipo);
    }

    $id = isset($_GET['remover']) ? $_GET['remover'] : $id;

    if($id != null) {
        $produto = new Produto();
        $produto->__set('id', $id);
        $conexao = new Conexao();

        $produtoService = new ProdutoService($conexao, $produto);
        $produtoRemover = $produtoService->remover();
    }

?>