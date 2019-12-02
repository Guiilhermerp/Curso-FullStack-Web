<?php

    class Espectador{
        protected $nome;
        protected $email;
        protected $senha;

        public function __construct(string $nome, string $email, string $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function lerMensagens(){
            echo('<br>Lendo mensagens....');
        }

        public function login(){
            echo('<br>Login feito =)');
        }

        public function logout(){
            echo('<br>Logout =( <br>');
        }
    }

?>