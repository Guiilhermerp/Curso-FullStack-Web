<?php

	include('./includes/generos.php');

	// Verificando o envio do formulario
	if ($_POST) {
		
		// Carregar a strJson que contem os filmes
		$strJson = file_get_contents('./includes/filmes.json');

		// Transformar a string em array associativo
		$filmes = json_decode($strJson, true);
		echo('<pre>');
		print_r($filmes);
		echo('</pre>');
		die();

		// Criar um novo filme 
		

		// Adicionar o novo filme ao array associativo
		//$novoFilme = file_put_contents('./includes/filmes.json');

		// (re)Transformar o array associativo em string json
		//$novoFilme = json_decode($strJson, true);

		// Gravar string json no arquivo


		// Redirecionar usuário para index.php
	}
	

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Clube do Filme</title>
	
	<!-- inserindo o bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- Meu css -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/cadastro.css">
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
	
	<main class="container mt-5">
		<form
			method="post">
			
			<div class="form-group">
				<label for="nome">Nome</label>
				<input
					type="text"
					name="nome"
					id="nome"
					class="form-control">
			</div>

			<div class="form-group">
				<label for="sinopse">Sinopse</label>
				<textarea
					name="sinopse"
					id="sinopse"
					class="form-control"
					row="3"
					>
				</textarea>
			</div>
			
			
			<div class="form-group">
				<label for="genero">Gênero</label>
				<select class="form-control" name="genero" id="genero">
					<option selected disabled>Selecione um gênero</option>
					<?php
						foreach ($generos as $i => $genero) {
							echo("<option value='$i'>$genero</option>");
						}
					?>
				</select>
				
			</div>

			<button type="submit" class="btn btn-primary float-right w-25">Enviar</button>

		</form>
	</main>
</body>
</html>