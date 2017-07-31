<?php

if (isset($_POST['btnSubmit'])) {
    $email = base64_decode($_GET['conta']);
    $senha = $_POST['txtPassAccept'];
    
    $codeUsuario = $usuarioDAO->consultarCodUsuarioEmail($email);

    if ($senhaDAO->redefinirSenha($codeUsuario, $senha)) {
        ?>
        <script type="text/javascript">
            alert("Senha alterada com sucesso.");
            document.location.href= "http://localhost/d3t/"; // MUDAR QUANDO UP WEB
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Erro ao alterar Senha.");
        </script>
        <?php
    }
}
?>