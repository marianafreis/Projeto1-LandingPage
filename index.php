<?php
	if(isset($_POST['submit'])){

		include_once('config.php');

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$whatsapp = $_POST['whatsapp'];

		$result = mysqli_query($conexao, "INSERT INTO clientes(nome, email, whatsapp) VALUES('$nome', '$email', '$whatsapp')");
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Júpiter Telecomunicações, provedor de internet fundada em Imperatriz-MA, conectando pessoas desde 1997.">
	<title>Júpiter Internet</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header class="cabecalho">
		<img class="cabecalho-img" src="logo.png" alt="Logo da Júpiter">
		<div class="cabecalho-texto">
			<p> ASSINE JÁ PELO TELEFONE</p>
			<p>(99) 3529-3131</p>
		</div>
	</header>

	<main class="conteudo">
		<section class="conteudo-principal">
			<div class="conteudo-principal-texto">
				<h1 class="conteudo-principal-texto-titulo">Precisando de internet rápida?</h1>
				<h2 class="conteudo-principal-texto-subtitulo">Conheça nossos planos!</h2>
			</div>
			<img class="conteudo-principal-img" src="jupiter.png">
			<div class="conteudo-principal-texto">
				<p class="conteudo-principal-texto-paragrafo">Em Imperatriz-MA até 550 MEGA por apenas R$99,90/mês</p>
			</div>
		</section>

		<section class="conteudo-secundario">
			<h3 class="conteudo-secundario-titulo">Preencha os dados abaixo e receba um contato com os melhores
				planos.</h3>
			<form class="conteudo-secundario-formulario" action="index.php" method="post">
				<div class="formulario-grupo">
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome" required>
				</div>
				<div class="formulario-grupo">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email">
				</div>
				<div class="formulario-grupo">
					<label for="whatsapp">Whatsapp:</label>
					<input type="text" id="whatsapp" name="whatsapp" required>
				</div>
				<input class="formulario-botao" type="submit" id="submit" name="submit" value="Enviar" />
			</form>
		</section>
	</main>

	<footer class="rodape">
		<img class="rodape-img" src="logo.png" alt="Logo da Júpiter">
		<p class="rodape-texto"> Júpiter Telecomunicações</p>
	</footer>
</body>

</html>