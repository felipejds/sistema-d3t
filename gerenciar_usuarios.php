<?php
require_once ("classes/DAO/usuarioDAO.php");
require_once("classes/Entidade/usuario.php");

require_once ("classes/DAO/senhaDAO.php");
require_once("classes/Entidade/senha.php");

$usuarioDAO = new usuarioDAO();
$senhaDAO = new senhaDAO();

$usuario = new usuario();
$senha = new senha();

?>

<!DOCTYPE html>

<html>
	
    <head>
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
        <section class="cadastrar-usuario">
            <div class="container">
                <form method="post" name="frmCadastro" >

                    <div class="wraper-form w100">
                      <label>Usuário:</label>
                      <input placeholder="bill.gates" name="txtUsuario" type="text" class="validate">
                    </div><!-- wraper-form --> 

                    <div class="wraper-form w100">
                      <label>Nome:</label>
                      <input placeholder="Bill Gates" name="txtNome" type="text" class="validate">
                    </div><!-- wraper-form --> 

                    <div class="wraper-form w100">
                      <label>Email:</label>
                      <input placeholder="email@dominio.com" name="txtEmail" type="email" class="validate">
                    </div><!-- wraper-form -->

                    <div class="wraper-form input-field w100">
                        <select name="slSexo">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select> 
                    </div><!-- wraper-form -->

                    <div class="flex">
                        <div class="wraper-form w50">
                          <label>Senha:</label>
                          <input onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" type="password" id="txtPass" name="txtPass" placeholder="*********" autocomplete="off" class="validate">
                        </div><!-- wraper-form -->

                        <div class="wraper-form w50">
                          <label>Repita a senha:</label>
                          <input type="password" onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" id="txtPassAccept" name="txtPassAccept" placeholder="*********" autocomplete="off" class="validate">
                        </div><!-- wraper-form -->
                   </div><!-- flex -->   

                    <p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p> 
                <div class="btn-wrapper">
                    <input type="submit" id="salvar" name="btnSubmit" value="Cadastrar" class="btn waves-effect teal accent-3" /><p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p> 
                </div><!-- btn-wrapper -->
                </form>

            </div><!-- container -->        
        </section><!-- cadastrar-usuario -->

        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/materialize.js"></script>
    </body>

</html>

<?php include "php/gerenciar_usuarios_script.php"  ?>