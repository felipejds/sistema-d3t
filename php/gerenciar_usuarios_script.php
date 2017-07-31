<?php

if (isset($_POST['btnSubmit'])) {

    $usuario->setUs_usuario($_POST['txtUsuario']);
    $usuario->setUs_nome($_POST['txtNome']);
    $usuario->setUs_email($_POST['txtEmail']);
    $usuario->setUs_sexo($_POST['slSexo']);

    if (!$usuarioDAO->consultarUsuario($_POST['txtUsuario'])) {

        if (!$usuarioDAO->consultarCodUsuarioEmail($_POST['txtEmail'])) {

            if ($usuarioDAO->cadastrar($usuario)) {

                $codigoUsuario = $usuarioDAO->consultarCodUsuario($_POST['txtUsuario']);

                $senha->setSe_senha($_POST['txtPassAccept']);
                $senha->setUs_cod($codigoUsuario);

                if ($senhaDAO->cadastrar($senha)) {
                    ?>
                    <script type = "text/javascript">
                        document.getElementById("resultadoCadastro").innerHTML = "Cadastrado com sucesso.";
                        document.getElementById("resultadoCadastro").style.color = "green";</script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">
                        document.getElementById("resultadoCadastro").innerHTML = "Erro ao cadastrar.";
                        document.getElementById("resultadoCadastro").style.color = "red";</script>
                    <?php
                }
            }
        } else {

            ?>

            <script type="text/javascript">
                document.getElementById("resultadoCadastro").innerHTML = "E-mail informado já esta cadastrado.";
                document.getElementById("resultadoCadastro").style.color = "red";</script>

            <?php

        }
    
    } else {

        ?>
        <script type="text/javascript">
            document.getElementById("resultadoCadastro").innerHTML = "Usuário informado já esta cadastrado.";
            document.getElementById("resultadoCadastro").style.color = "red";</script>
        <?php

    }

}

?>

<!-- VERIFICAR NA PROXIMA REUNIAO SE CONSEGUE CONSULTAR DIRETO NO BANCO APOS PASSAR UM CAMPO -->