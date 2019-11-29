<?php

    $nLancamentos = 0;
    $nCaras = 0;

    while ($nCaras < 5) {

        // lancei a moeda
        $moeda = mt_rand(0,1);

        // perguta se deu cara
        if ($moeda == 1) {
            // deu cara !
            $nCaras = $nCaras + 1;
            echo('cara <br>');
        } else {
            echo('coroa <br>');
        }

        // aumenta o numero de lancamento
        $nLancamentos++;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cara ou Coroa</title>
</head>
<body>
    <?php 
    echo($nLancamentos . " lançamentos e caras: " . $nCaras );
    ?>
</body>
</html>