<?php 
	
	$erro_email = false;
	$erro_senha = false;
	$mostrar_mensagem = false;

	$erro_login = false;

	$emailCorreto = 'gg@mail.com';
	$senhaCorreta = '777';
	
	//Detectar se o formulario foi enviado!!
	if($_POST){
		
		//Autorizando a exibicao de mensagem
		$mostrar_mensagem = true;

		// Testando se o email foi digitado
		if($_POST['email']){
			$erro_email = false;
		} else {
			$erro_email = true;
		}

		// Testando se a senha foi digitada
		if($_POST['senha']){
			$erro_senha = false;
		} else {
			$erro_senha = true;
		}

		// Validando login e senha
		if ($_POST['email']==$emailCorreto && $_POST['senha']==$senhaCorreta) {
			
			// redireciona o usuario para index.php
			header('Location: index.php');

		} else {

			// Muda erro_login para true
			$erro_login = true;
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Opa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label for="email">Email</label>
				<!-- Classe para verificar se email esta errado -->
				<input type="email" class="form-control <?php if($erro_email) {echo('is-invalid');} ?>" name="email" id="email">
				<!-- Div para menssagem em baixo do input -->
				<?php if($erro_email): ?>
					<!-- Div para menssagem em baixo do input -->
					<div class="invalid-feedback">
						E-mail inválido 
					</div>
				<?php endif ?>
			</div>

			<div class="form-group">
				<label for="senha">Senha</label>
				<!-- Classe para verificar se senha esta errado -->
				<input type="password" class="form-control <?php if($erro_senha) {echo('is-invalid');} ?>" name="senha" id="senha">
				<?php if($erro_senha): ?>
					<!-- Div para menssagem em baixo do input -->
					<div class="invalid-feedback">
						Senha inválida
					</div>
				<?php endif ?>
			</div>

			<button type="submit">Login</button>

			<!-- Condição para imagens não ficar na tela, apenas quando for feit um SUBMIT -->
			<?php if ($mostrar_mensagem): ?>
			
				<!-- <?php if($erro_email): ?>
					<div class="alert alert-danger mt-3">Digite o seu e-mail</div>
				<?php endif ?>
		
            	<?php if($erro_senha): ?>
					<div class="alert alert-danger mt-3">Digite a sua senha</div>
				<?php endif?> -->

				<!-- Alerta email e senha erradas -->
				<?php if($erro_login): ?>
					<div class="alert alert-danger mt-3">E-mail/Senha incorreto.</div>
				<?php endif?>

			<?php endif ?>
		</form>
	</div>
	
</body>
</html>