<?php

if (isset($_POST['btnSubmit'])) {
    
    if ($usuarioDAO->consultarCodUsuarioEmail($_POST['txtEmail'])) {

        $mail = $_POST['txtEmail'];
        
        $mailCript = base64_encode($_POST['txtEmail']);
        
        $mensagem = "Você esta recebendo este e-mail, por que foi solicitado a alteração de senha para o site NOME_SITE, clique no link abaixo para redefinir sua senha. <br /><a href='http://localhost/d3t/redefinirSenha.php?conta={$mailCript}'>Recuperar Senha</a>";
        
        require_once("enviar_email.php");

        enviarEmail($_POST['txtEmail'], "Prezado", "Recuperação de senha", $mensagem);

    } else {

        ?>
        <script type="text/javascript">
            document.getElementById("resultadoSenha").innerHTML = "E-mail informado não encontrado na base de dados.";
            document.getElementById("resultadoSenha").style.color = "red";</script>
        <?php

    }

}

?>