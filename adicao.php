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
            <div class="container d-flex">
                <a class="navbar-brand mb-0 h1" href="#">
                    <i class="fa-solid fa-tag d-inline-block align-center"></i>
                    VIRTUE TECH
                </a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarPrincipal">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="">Voltar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="display">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h1 class="display-4 ">Adicionar</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <form action="adicionar.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Preço</label>
                                <input type="text" name="preco" class="form-control" placeholder="R$0000,00">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="text" name="imagem" class="form-control">
                        <small class="form-text text-muted">
                            Endereço da imagem
                        </small>
                    </div>
                    
                    <div class="form-group">
                        <label>Tipo</label>
                        <select name="tipo" class="form-control">
                            <option value="smartphone" >Smartphone</option>
                            <option value="console" >Console</option>
                            <option value="acessorio">Acessório</option>
                            <option value="pc">Pc ou periférico</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-lg">Enviar</button>
                    </div>
                </form>
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