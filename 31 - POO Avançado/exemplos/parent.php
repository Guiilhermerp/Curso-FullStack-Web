<?php

    class Pessoa {
        protected $nome;
        protected $cpf;

        public function __construct($nome, $cpf = null){
            $this->nome = $nome;
            $this->cpf = $cpf;
            echo("CONSTRUTOR DE PESSOA EXECUTADO");
        }

    }

    class Usuario extends Pessoa{
        protected $email;
        protected $senha;

        public function __construct($email, $senha, $nome, $cpf){
            $this->email = $email;
            $this->senha = $senha;
        }
    }

    $user = new Usuario('Sérgio', '123.123.123-12');

    echo('<pre>');
    print_r($user);
    echo('</pre>');
?>