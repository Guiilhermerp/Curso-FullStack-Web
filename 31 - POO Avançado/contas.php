<?php
    include_once('./interfaces/Pagavel.php');
    include_once('./classes/Boleto.php');

    $b = new Boleto(123.22);

    function pagarConta(Pagavel $conta){

        // A Existencia dos métodos abaixo está GARANTIDA  já que o paramento é do tipo PAGAVEL.
        $conta->pagar();
        $conta->reembolsar();
    }

    echo('<pre>');
    print_r($b);
    echo('</pre>');

    pagarConta($b);

?>