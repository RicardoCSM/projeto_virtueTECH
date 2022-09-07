<?php 

    require "classes.php";

    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $id = $_POST['id'];

    $produto = new Produto();
    $produto->__set('nome', $nome);
    $produto->__set('imagem', $imagem);
    $produto->__set('descricao', $descricao);
    $produto->__set('preco', $preco);
    $produto->__set('id', $id);
    $conexao = new Conexao();

    $produtoService = new ProdutoService($conexao, $produto);

    if($produtoService->Editar()) {

        if(isset($_GET['pag']) && $_GET['pag'] == 'index') {
            header('location: edicao.php');
        } else {
            header('location: tela_admin.php');
        }
    }

?>