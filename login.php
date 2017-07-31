<?php include "php/login_script.php"  ?>


<!DOCTYPE html>

<html lang="pt-br"> <!-- fael porque o lang, faz diferença-->

	<head>
		<title>Login | Dev3Tech sites e sistemas</title>
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
		
		<section class="logar">
			<div class="container right-align">
				<div class="row">
					<h2>Acesse ao sistema</h2>				
				    <form method="post" name="frmLogin">
				        <div class="input-field">
				          	<input id="usuario" type="text" class="validate" required name="txtUsuario">
				          	<label for="usuario" class="active">Usuário</label>
				        </div>

				        <div class="input-field">
				          	<input id="senha" type="password" class="validate" required name="txtPassword">
				          	<label for="senha" class="active">Senha</label>
				        </div>
				        <div class="btn-wrapper">
				        			<div class="recuperar-senha"><a href="recuperar_senha.php">Esqueci a senha</a></div><!-- recuperar-senha -->
									<input class="waves-effect teal accent-3 btn" type="submit" name="btnSubmit" value="logar">
									
						</div>

   
				    </form>
				  </div>
			</div><!-- container -->
			<img src="images/logo2.png" style="width: 200px;position: absolute;right: 10px;bottom: 10px">

		</section><!-- logar -->
		<script src="js/jquery.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/trocar-senha.js"></script>

	</body>

</html>