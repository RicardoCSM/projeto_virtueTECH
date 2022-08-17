<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Virtue TECH</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/88df19f8f8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
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
                                <li><a href="" class="dropdown-item">Smartphones</a></li>
                                <li><a href="" class="dropdown-item">Acessórios</a></li>
                                <li><a href="" class="dropdown-item">Consoles</a></li>
                                <li><a href="" class="dropdown-item">Pc e periféricos</a></li>
                                <li><a href="todos_produtos.php" class="dropdown-item">Todos os produtos</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Sobre</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav nav-right">
                        <li class="nav-item ">
                            <a class="nav-link" href="">
                            <i class="fa-solid fa-user mr-1"></i>
                            Login
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="">
                            <i class="fa-solid fa-user-plus"></i>    
                            Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section  id="home"><!-- Inicio Seção Home -->
            <div  class="container">
                <div class="row">
                <div class="col-md-8 d-flex">
                    <div class="align-self-center">
                    <h1 class="display-2">Sua loja tech</h1>
                    
                    <p>
                        Com preços imbatíveis e diversos produtos em seu catálogo, a Virtue TECH está sempre à frente e traz em primeira mão os melhores lançamentos do mercado mundial. 
                    </p>

                    <a href="todos_produtos.php">
                        <button class="btn btn-lg mt-2">
                            Ver produtos
                        </button>
                    </a>
                    

                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <img src="img/specs1.png" >
                </div>
                </div>
            </div>
        </section><!-- Fim Seção Home -->

        <section id="produtos_card"><!-- Inicio Seção Produtos -->
            <div class="container">
                <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top align-self-center" src="img/smartphone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Smartphones</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn ">Comprar</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/fone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Acessórios</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn ">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/console.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consoles</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </section><!-- Fim Seção Produtos -->

        <section  id="pc"><!-- Inicio Seção PC -->
            <div  class="container">
                <div class="row">
                
                <div class="col-md-5 d-none d-lg-block">
                    <img src="img/gabinete.jpg">
                </div>
                
                <div class="col-md-7 d-flex ">
                    <div class="align-self-center ">
                    <h1 class="display-2">PC e Periféricos</h1>
                    
                    <p>
                    Você pode escolher o computador ideal na Virtue TECH, que conta com uma ampla variedade de produtos com os melhores preços: computador gamer, computador de mesa, além de monitores para dar um up em seu setup.
                    </p>

                    <button class="btn btn-lg mt-2">
                        Comprar
                    </button>

                    </div>
                </div>
                </div>
            </div>
        </section><!-- Fim Seção PC -->
        
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