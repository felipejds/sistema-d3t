
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::Cadastro - Dev3Tech.::</title>
    </head>
    <body>
        <form method="post" name="frmCadastro">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="txtNome" placeholder="Bill Gates" autocomplete="off" /></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="txtEmail" placeholder="email@dominio.com" autocomplete="off" /></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" type="password" id="txtPass" name="txtPass" placeholder="*********" autocomplete="off" /></td>
                </tr>
                <tr>
                    <td>Confirmar senha:</td>
                    <td><input type="password" onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" id="txtPassAccept" name="txtPassAccept" placeholder="*********" autocomplete="off" /></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td>
                        <select name="slSexo">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnSubmit" value="Cadastrar" class="btnSubmit" /> <a href="home.php">Voltar</a>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>