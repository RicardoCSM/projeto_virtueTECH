<?php 
	$tipo = 'todosProdutos';
    $id = '';
	require 'produtos_controller.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Virtue TECH</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/88df19f8f8.js" crossorigin="anonymous"></script>
        <script src="editar.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
    <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container d-flex">
                <a class="navbar-brand mb-0 h1" href="#">
                    <i class="fa-solid fa-tag d-inline-block align-center"></i>
                    VIRTUE TECH
                </a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarPrincipal">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="tela_admin.php">Voltar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="display">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h1 class="display-4 ">Editar</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="produtos">
            <div class="container">
                <div class="row">
						<div class="col">
							<?php foreach($produtos as $indice => $produto) {?>
							<div class="row mb-3 d-flex align-items-center ">
                                <div class="col-sm-10 row d-flex produto" id="produto_<?= $produto->id ?>">
                                    <div class="produto-imagem col-sm-4">
                                        <img src="<?= $produto->imagem ?>" alt="">
                                    </div>
                                    <div class="produto-imagem col-sm-6">
                                        <h1><?= $produto->nome ?></h1>
                                        <p><?= $produto->descricao ?></p>
                                    </div>
                                </div>
								<div class="col-sm-2 d-flex justify-content-between">
                                    <i onclick="remover(<?= $produto->id ?>)" class="fas fa-trash-alt fa-lg"></i>
									<i onclick="editar(<?= $produto->id ?>, '<?= $produto->nome ?>', '<?= $produto->imagem ?>', '<?= $produto->descricao?>', '<?= $produto->preco?>' )" class="fas fa-edit fa-lg"></i>
								</div>
							</div>
							<?php } ?>
                        </div>
				</div>
            </div>
        </section>
       
        
        <footer class="pt-4 pb-3">
            <div class="container">
                <div class="row d-flex align-items-center ">
                <div class="col-md-8 pt-2">
                    <p>
                        Desenvolvido por Ricardo Costa
                    </p>
                </div>
                <div class="col-md-4 d-flex justify-content-end align-itens-center">
                    <a href="" class="btn btn-outline-dark ml-2">
                    <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="btn btn-outline-dark ml-2">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="btn btn-outline-dark ml-2">
                    <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="btn btn-outline-dark ml-2">
                    <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="" class="btn btn-outline-dark ml-2">
                    <i class="fab fa-youtube"></i>
                    </a>
                </div>
                </div>
            </div>
        </footer>

    </body>
</html>