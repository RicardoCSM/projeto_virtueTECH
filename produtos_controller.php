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

?>