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

    $quantidade = 5;

    do {
        echo $quantidade . "<br>";
        $quantidade--;
    } while($quantidade > 0);
    
    echo('<hr>');

    for ($i=0; $i < 5 ; $i++) { 
        echo $i . "<br>";
    }

    echo('<hr>');

    $carro = [
        "cor" => "vermelho",
        "marca" => "ford"
    ];

    foreach ($carro as $pos => $valor) {
        echo "$pos : $valor" . '<br>';
    }

    echo('<hr>');

    $primos = [1,2,3,5,7,11];
    
    foreach ($primos as $posicao => $valor) {
        echo("$posicao : $valor <br>");
    }
        
    echo('<hr>');

    $numeros = [];
    $numeros[] = 10;
    $numeros[] = 22;

    echo($numeros[0]);

    echo('<hr>');

    
    $frutas = ["Goiba", "Jaca", "Maça"];
    //   Enquanto i for menor que tamanho da array
    for ($i=0; $i < count($frutas); $i++) {
        // se tamanho for igual a Jaca, para o loop
        if($frutas[$i] == "Jaca"){
            break;
        }
        echo "A fruta é $frutas[$i] <br/>"; 
    }
    ?>
</body>
</html>