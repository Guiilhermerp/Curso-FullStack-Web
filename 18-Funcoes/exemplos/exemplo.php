<?php
    function volume($altura, $largura, $comprimento){
        return $altura * ($largura * $comprimento); 

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo (volume(10,10,10) );
    ?>
</body>
</html>