<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Virtue TECH</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/88df19f8f8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand mb-0 h1" href="#">
                    <i class="fa-solid fa-tag d-inline-block align-center"></i>
                    VIRTUE TECH
                </a>

                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarPrincipal">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link active" href="">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" id="navbarProdutos">Produtos</a>
                            <ul class="dropdown-menu">
                                <li><a href="smartphones.php" class="dropdown-item">Smartphones</a></li>
                                <li><a href="acessorios.php" class="dropdown-item">Acessórios</a></li>
                                <li><a href="consoles.php" class="dropdown-item">Consoles</a></li>
                                <li><a href="pc.php" class="dropdown-item">Pc e periféricos</a></li>
                                <li><a href="todos_produtos.php" class="dropdown-item">Todos os produtos</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Sobre</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav nav-right">
                        <li class="nav-item ">
                            <a class="nav-link" href="login.php">
                            <i class="fa-solid fa-user mr-1"></i>
                            Login
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="cadastro.php">
                            <i class="fa-solid fa-user-plus"></i>    
                            Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="card_formularios">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-md-6 m-auto">
                        
                        <div class="card pt-3">
                            <div class="card-body">

                                <div class="text-center">
                                    <i class="fa-solid fa-user-plus"></i>
                                </div>
                            

                                <form action="cadastrar.php" method="POST">
                                    <input name="nome" type="text" class="form-control mt-4 mb-2" placeholder="Nome">
                                    <input name="sobrenome" type="text" class="form-control mb-2" placeholder="Sobrenome">
                                    <input name="email" type="email" class="form-control mb-2" placeholder="E-mail">
                                    <input name="senha" type="password" class="form-control mb-2" placeholder="Senha">
                                    <input name="confirmar_senha" type="text" class="form-control mb-2" placeholder="Confirmar senha">
                                    
                                    <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro_cadastro'){?>

                                        <div class="text-danger text-center">
                                        E-mail ou senha inválido(s)/incorreto(s)
                                        </div>

                                    <?php } ?>

                                    <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'cadastro_sucesso'){?>

                                        <div class="text-success text-center">
                                        Cadastro feito com sucesso
                                        </div>

                                    <?php } ?>

                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg">Cadastrar-se</button>
                                        <a href="" class="nav-link">Entrar</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
       
        
        <footer class="pt-4 pb-3 mt-5">
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