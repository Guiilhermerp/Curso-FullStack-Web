<?php

include('./classes/Espectador.php');
include('./classes/Usuario.php');
include('./classes/Administrador.php');

    $spec = new Espectador('Spec', 'spec@mail.com', 'opa');
    echo('<pre>');
    print_r($spec);
    echo('</pre>');

    //Efetuando o login
    $spec->login();
    $spec->lerMensagens();
    $spec->logout();

    $u = new usuario('Guilherme ', 'usuario@mail.com', 'eita');
    echo('<pre>');
    print_r($u);
    echo('</pre>');

    $u->login();
    $u->lerMensagens();
    $u->escreverMensagem('Olá :)');
    $u->logout();

    $adm = new Administrador('Jorge','adm@mail.com', 'eu sou o adm');
    $adm->chutarUsuario($u);

    echo('<hr>');


?>