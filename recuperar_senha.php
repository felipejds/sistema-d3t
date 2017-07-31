<?php
require_once ("classes/DAO/usuarioDAO.php");

$usuarioDAO = new usuarioDAO();

?>

<!DOCTYPE html>

<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <title>.::Login - Dev3Tech - Recuperar senha::.</title>
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

        <section class="rec-senha">
            <div class="container">
                <div class="wrapper-rec-senha">
                    <h2>Para redefinir sua senha, por favor insira seu e-mail de cadastro no formulário abaixo.</h2>

                    <form method="post" name="frmRecuperarSenha">
                        <div class="input-field">
                            <input class="validate" type="email" id="email" name="txtEmail" required>
                            <label for="email" class="active">Email:</label>
                        </div><!-- input-field -->
                        <div class="btn-wrapper">
                            <input type="submit" name="btnSubmit" value="Recuperar" class="waves-effect teal accent-3 btn" />
                            <div class="btn-voltar"><a href="login">Voltar</a></div>
                        </div><!-- btn-wrapper -->
                    </form>
                </div><!-- wrapper-rec-senha -->
                    <img src="images/logo2.png" style="width: 200px;position: absolute;right: 10px;bottom: 10px">
            </div><!-- container -->
        </section><!-- rec-senha -->
    </body>
</html>

<?php include "php/recuperar_senha_script.php" ?>