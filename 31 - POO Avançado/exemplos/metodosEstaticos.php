<?php
    $usuario = [
        [
            'nome' => "gui",
            'senha' => '123',
            'email' => 'g@mail.com'
        ],
        [
            'nome' => "gu",
            'senha' => '321',
            'email' => 'a@mail.com'
        ]
    ];


    class Usuario{
        protected $nome;
        protected $senha;
        protected $email;

        public function __construct($nome, $senha, $email){
            $this->nome = $nome;
            $this->senha = $senha;
            $this->email = $email;
        }

        public static function carregarUsuario($id){
            global $usuario;
            $u = $usuario[$id];
            $p = new self($u['nome'],$u['senha'],$u['email']);
            return $p;
        }
    }

    $u = Usuario::carregarUsuario(1);

    echo('<pre>');
    print_r($u);
    echo('</pre>');

?>