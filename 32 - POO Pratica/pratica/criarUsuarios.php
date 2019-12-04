<?php
    include ('./req/Utils.php');
    include ('./req/DB.php');


    // Criando um usuário -- nivel spec(3) user(2) adm(1)
    Utils::criarUsuario('spec@mail.com', 'umaSenha', 3);
    Utils::criarUsuario('usuario@mail.com', 'umaSenhaUser', 2);
    Utils::criarUsuario('adm@mail.com', 'umaSenhaAdm', 1);


?>