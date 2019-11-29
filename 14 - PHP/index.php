<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opa</title>
</head>
<body>
    <?php
    
    // DECLARACAO VIA VARIAVEL
    $nome = 'Guilherme';
    $idade = 21;
    $altura = 1.7;
    $peso = 65;
    $nacionalidade = 'Brasileiro';

    echo("Meu nome é $nome. <br> Tenho $idade anos <br> Sou $nacionalidade. <br>");
    echo("Minha altura é $altura m <br> Peso $peso kg <hr>");

    // DECLARACAO VIA ARRAY SIMPLES
    $meuarray = [1,2,3,5,7,11,13, 17];

    echo("Meu 1º primo é: " . $meuarray[0] . "<br>");
    echo("Meu 2º primo é: " . $meuarray[1] . "<br>");
    echo("Meu 3º primo é: " . $meuarray[2] . "<br>");
    echo("Meu 4º primo é: " . $meuarray[3] . "<br>");
    echo("Meu 5º primo é: " . $meuarray[4] . "<br>");
    echo("Meu 6º primo é: " . $meuarray[5] . "<br>");
    echo("Meu 7º primo é: " . $meuarray[6] . "<br>");
    echo("Meu 8º primo é: " . $meuarray[7] . "<hr>");
    
    // DECLARA VIA ARRAY ASSOCIATIVO
    $pessoa1 = [
        'nome' => "Silva Silva",
        'idade' => 40,
        'nacionalidade' => "Frances",
        'peso' => 78,
        'altura' => 1.9
    ];

    echo("Meu nome é $pessoa1[nome]. <br> Tenho $pessoa1[idade] anos <br> Sou $pessoa1[nacionalidade] <br>");
    echo("Minha altura é $pessoa1[altura] m <br> Peso $pessoa1[peso] kg <hr>");

    $pessoa2 = [
        'nome' => "Costa Costa",
        'idade' => 70,
        'nacionalidade' => "Italiano",
        'peso' => 90,
        'altura' => 1.75
    ];

    echo('Meu nome é ' . $pessoa2['nome']. ' <br> Tenho ' . $pessoa2['idade'] . ' anos <br> Sou ' . $pessoa2['nacionalidade'] . '<br>');
    echo('Minha altura é ' . $pessoa2['altura'] . 'm <br> Peso ' . $pessoa2['peso'] . 'kg <br>');
    ?>
</body>
</html>