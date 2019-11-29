<?php
	// Incluindo $filmes
	include('./includes/filmes.php');

	// Incluindo $generos
	include('./includes/generos.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Turma da Mônica - Laços - Clube do Filme</title>

	<!-- Meu estilo -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/filme.css">
</head>

<body>
	<nav>
		<ul>
			<li><a href="#">Gênero 1</a></li>
			<li><a href="#">Gênero 2</a></li>
			<li><a href="#">Gênero 3</a></li>
			<li><a href="#">Gênero 4</a></li>
			<li><a href="#">Gênero 5</a></li>
		</ul>
		<form method="GET" action="busca.php">
			<input type="text" name="trecho">
			<button type="submit">Buscar</button>
		</form>
	</nav>
	<main>

		<h2>Nome do Filme</h2>
		<img src="./assets/img/cartazes/cartaz-0.png" alt="Título do filme" class="cartaz">
		<section>

			<div class="sinopse">
				<h5>Sinopse</h5>
				<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur molestias ducimus aliquam itaque modi nihil repellendus non nisi sequi fugit similique explicabo numquam hic, doloremque facere ratione expedita harum architecto!</div>
			</div>

			<div class="censura">
				<h5>Censura</h5>
				<div>Livre</div>
			</div>
			
			<div class="critica">
				<h5>Crítica</h5>
				<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quas dolorum nam! Hic neque totam necessitatibus, aliquid optio labore magni! Laborum natus quibusdam esse officiis quo doloremque voluptate iusto nisi!</div>
			</div>
		</section>

		<iframe src="https://www.youtube.com/embed/wmiIUN-7qhE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</main>
</body>

</html>