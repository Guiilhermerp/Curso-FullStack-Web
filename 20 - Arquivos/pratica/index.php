<?php

	include('./includes/generos.php');
	
	//Carregar conteudo do arquivos json
	$strJson = file_get_contents('./includes/filmes.json');

	// Transformando a strJson em um array associativo
	$filmes = json_decode($strJson, true);

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Clube do Filme</title>

	<!-- Meu css -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/index.css">

</head>
<body>
	<nav>
		<ul>
			<?php 
				for($i=0 ; $i < count($generos) ; $i++){
					echo("<li><a href='#'>$generos[$i]</a></li>");
				}
			?>
		</ul>
		<form method="GET" action="busca.php">
			<input type="text" name="trecho">
			<button type="submit">Buscar</button>
		</form>
	</nav>
	
	<main>
		<section>

			<?php
				for($i=0;$i<count($filmes);$i++){
					echo('
						<article>
							<a href="#">
								<img src="./assets/img/cartazes/cartaz-'.$i.'.png" alt="titulo">
								<span>Ver +</span>
							</a>
						</article>
					');
				}
			?>
			
		</section>
	</main>
</body>
</html>