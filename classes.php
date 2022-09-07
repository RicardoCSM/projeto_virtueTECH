<?php

    class Conexao {
        private $host = 'localhost';
        private $dbname = 'virtueTech';
        private $user = 'root';
        private $pass = 'Cado_0123';
        
        public function conectar() {
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;
            } catch(PDOException $e) {
                echo '<p>' . $e->getMessage() . '</p>';
            }
        }
    }

    class Produto {
        private $id;
        private $tipo;
        private $nome;
        private $imagem;
        private $descricao;
        private $preco;

        public function __get($name)
        {
            return $this->$name;
        }

        public function __set($name, $value)
        {
            $this->$name = $value;
            return $this;
        }
    }

    class ProdutoService {
        private $conexao;
        private $produto;

        public function __construct(Conexao $conexao,Produto $produto)
        {
            $this->conexao = $conexao->conectar();
            $this->produto = $produto;
        }

        public function recuperar() { //read
            $query = '
                select 
                    *
                from
                    tb_produtos
                ';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function adicionar() {
            $query = 'insert into tb_produtos(tipo, nome, imagem, descricao, preco)values(:tipo, :nome, :imagem, :descricao, :preco)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tipo', $this->produto->__get('tipo'));
            $stmt->bindValue(':nome', $this->produto->__get('nome'));
            $stmt->bindValue(':imagem', $this->produto->__get('imagem'));
            $stmt->bindValue(':descricao', $this->produto->__get('descricao'));
            $stmt->bindValue(':preco', $this->produto->__get('preco'));
            
            $stmt->execute();
        }
        
        public function Editar() {
                $query = "
                    update
                        tb_produtos
                    set
                        nome = ?,
                        imagem = ?,
                        descricao = ?,
                        preco = ?
                    where
                        id = ?
                ";
                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(1, $this->produto->__get('nome'));
                $stmt->bindValue(2, $this->produto->__get('imagem'));
                $stmt->bindValue(3, $this->produto->__get('descricao'));
                $stmt->bindValue(4, $this->produto->__get('preco'));
                $stmt->bindValue(5, $this->produto->__get('id'));
                return $stmt->execute();
        }

        public function recuperarTipo($tipo) {
            $query = "
                select
                    *
                from
                    tb_produtos as p
                where
                    p.tipo = $tipo
                ";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }

    class Conta {
        private $id;
        private $tipo;
        private $nome;
        private $sobrenome;
        private $email;
        private $senha;

        public function __get($name)
        {
            return $this->$name;
        }

        public function __set($name, $value)
        {
            $this->$name = $value;
            return $this;
        }
    }

    class ContaService {
        private $conexao;
        private $conta;

        public function __construct(Conexao $conexao,Conta $conta)
        {
            $this->conexao = $conexao->conectar();
            $this->conta = $conta;
        }

        public function inserir() {
            $query = 'insert into tb_contas(tipo, nome, sobrenome, email, senha)values(:tipo, :nome, :sobrenome, :email, :senha)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tipo', 2);
            $stmt->bindValue(':nome', $this->conta->__get('nome'));
            $stmt->bindValue(':sobrenome', $this->conta->__get('sobrenome'));
            $stmt->bindValue(':email', $this->conta->__get('email'));
            $stmt->bindValue(':senha', $this->conta->__get('senha'));

            $stmt->execute();
        }

        public function verificaLogin() {
            $query = '
                select
                    *
                from
                    tb_contas as t
                where
                    t.email = :email AND t.senha = :senha
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email', $this->conta->__get('email'));
            $stmt->bindValue(':senha', $this->conta->__get('senha'));
            $stmt->execute();
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }

?>