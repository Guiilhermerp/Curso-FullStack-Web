<?php

    // Variavel para guardar texto
    $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolore, tenetur debitis, omnis molestiae, quis corporis rerum totam illo quasi similique. Quasi alias exercitationem vero voluptas, pariatur sed ullam velit.";

    // Guardar o texto no arquivo file.txt
    $size = file_put_contents('file.txt',$texto);

    // imprime $size
    echo("Bytes escritos: $size </br>");

    // lendo conteudo do arquivo mensagem.txt

    $ler = file_get_contents('mensagem.txt');


    // imrpimindo conteudo do arquivo
    echo("$ler </br>");

    // carregando o json da receita
    $txtReceita = file_get_contents('receita.json');

    // transformando a string json da receita em array associativo
    $receita = json_decode($txtReceita, true);

    // imprimindo o conteudo da receita
    echo("<pre>");
    print_r($receita);
    echo("</pre>");
?>