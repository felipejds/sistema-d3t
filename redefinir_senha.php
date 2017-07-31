<?php

require_once("classes/DAO/usuarioDAO.php");
require_once("classes/DAO/senhaDAO.php");

$usuarioDAO = new usuarioDAO();
$senhaDAO = new senhaDAO();
?>

<!DOCTYPE html>

<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <title>.::Login - dev3tech - Redinir Senha::.</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    </head>
    
    <body>
        <div class="dvRedefinirSenha">
            <p>Insira corretamente sua senha e clique no botão alterar.</p>
            
            <form method="post" name="frmRedefinirSenha">
                <table>

                    <tr>
                        <td>Senha:</td>
                        <td><input onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" type="password" id="txtPass" name="txtPass" placeholder="*********" autocomplete="off" class="inputForm" /></td>
                    </tr>

                    <tr>
                        <td>Confirmar senha:</td>
                        <td><input type="password" onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" id="txtPassAccept" name="txtPassAccept" placeholder="*********" autocomplete="off" class="inputForm" /></td>
                    </tr>

                    <tr>
                        <td colspan="2"><p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p></td>
                    </tr>

                    <tr>
                        <td colspan="2"> <input type="submit" name="btnSubmit" value="Alterar Senha" class="btnSubmit" /> <a href="index.php">Voltar</a></td>
                    </tr>

                </table>

            </form>
        </div>
    
    </body>
</html>

<?php include "php/redefinir_senha_script.php" ?>