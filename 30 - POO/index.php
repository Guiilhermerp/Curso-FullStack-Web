<?php

    // Incluindo classes
    include 'Cachorro.php';
    include 'Carro.php';

    // !!!!!!!!!!!!!!! USANDO CLASSE CARRO !!!!!!!!!!!!!!!

    // Criando novo carro
    $c = new Carro('Captur', 2019, 40);
    $d = new Carro('Onix', 2017, 60);

    // Mostrando Carro
    echo('<pre>');
    print_r($c);
    echo('</pre>');

    // Alterando o modelo de $c (carro)
    $c->modelo= 'Fluence';

    // Mostrando Carro
    echo('<pre>');
    print_r($c);
    echo('</pre>');

    // Executando metodos
    $c->acelerar(15);
    $c->acelerar(10);
    $c->freiar(5);
    $c->buzinar();
    $c->ligado();
    $c->buzinar();
    $d->buzinar();

    echo("<hr>");

    // !!!!!!!!!!!!!!! USANDO CLASSE CACHORRO !!!!!!!!!!!!!!!

    $c = new Cachorro('Dogao');
    $c->dormir();
    $c->brincar();
    


    $c->mostrarEstado();

?>