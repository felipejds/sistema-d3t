<?php include"php/home_script.php" ?>

    <!doctype html>

    <html lang="pt-br">

		<head>
			<title>Home | Dev3Tech sites e sistemas</title>
			<link rel="shortcut icon" href="images/shotcut.png" />
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i" rel="stylesheet">
        	<link rel="stylesheet" type="text/css" href="css/materialize.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.o, maximun-scale=1.0">
			<meta charset ="description" content="dev3tech.com.br: software, desenvolvimento de sites e sistemas para pequenos e micro negócios"/>
			<meta charset= "keyword" content="empresa, sites,baratos,Ribeirão,das,Neves,Minas,Gerais,Belo,Horizonte,qualidade,Sistemas,sistema,gerenciamento,barato,em,conta,dev3tech,d3t,"/>
			<meta charset= "author" content="DEV3TECH"/>
		</head>

		<body>

			<header>
				<img src="images/logo2.png"/>
				<div class="pesquisa">
					<form>
						<input type="search" name=""/>
					</form>
						<img src="images/search.png"/>
				</div><!-- pesquisa -->
				<div class="perfil-wrapper">Olá, <?=$_SESSION["nome"];?></div>
				<div class="menu-perfil">
						<ul>
							<a href=""><li>Perfil</li></a>
							<a href="?acao=sair"><li>Sair</li></a>
						</ul>
				</div><!-- menu-perfil -->
				<div class="clear"></div>
			</header>

			<section class="sessao-corpo">

				<div class="side-bar">
					<div class="modulos-wrapper">

						<div class="modulos-single" id="administrador"><img src="images/adm.png"/><p>Administração<p></div><!-- Modulos-single -->

						<ul class="administrador">
							<li><a href="gerenciar_usuarios.php">Gerenciar Usuários</a></li>
							<li><a href="relatorios_usuarios.php">Relatórios gerencial</a></li>
							<li><a href="#">sub-modulo 3</a></li>
							<li><a href="#">sub-modulo 4</a></li>
						</ul>

						<div class="modulos-single" id="cliente"><img src="images/shop.png"><p>Cliente<p></div><!-- Modulos-single -->

						<ul class="cliente">
							<li><a href="#">sub-modulo 1</a></li>
							<li><a href="#">sub-modulo 2</a></li>
							<li><a href="#">sub-modulo 3</a></li>
							<li><a href="#">sub-modulo 4</a></li>
						</ul>

						<div class="clear"></div>
					</div>
				</div><!-- side-bar -->

				<div class="corpo-home">
					<div class="conteudo-principal">
					</div><!-- conteudo-principal -->
				</div><!-- corpo-home -->

			</section><!-- sessao-corpo -->

			<script src="js/jquery.js"></script>
			<script src="js/materialize.js"></script>
			<script src="js/navegacao_modulos.js"></script>
			<script src="js/side-bar.js"></script>
		
		</body>
	
	</html>
