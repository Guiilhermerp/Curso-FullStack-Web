<?php
    $pessoas = [
       [
           'nome' => 'João',
           'idade' => 32
       ],
       [
        'nome' => 'Juca',
        'idade' => 30
       ],
       [
        'nome' => 'Jorge',
        'idade' => 40
       ],
    ]

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacao</title>
</head>
<body>
       
    <table>
       <thead>
            <tr>
                <td> Nome </td>
                <td> Idade </td>
            </tr>
       </thead>

       <tbody>
            <?php foreach ($pessoas as $pessoa) { ?>
            <tr>
                <td><? $pessoa['nome'] ?></td>
                <td><? $pessoa['idade'] ?></td>
            </tr>
            <?php } ?>
       </tbody>
    </table>

</body>
</html>