<?php

session_start();
require_once ("classes/DAO/usuarioDAO.php");

$usuarioDAO = new usuarioDAO();

if (isset($_POST['btnSubmit'])) {

    if ($usuarioDAO->login($_POST['txtUsuario'], $_POST['txtPassword'])) {

        $_SESSION['logado'] = '1';
		$_SESSION['nome'] = $usuarioDAO->RetornaNome($_POST['txtUsuario']);
	  
	  	header ("Location: home");
    } else {
        ?>
        <script type="text/javascript">
            alert("Usuário ou senha inválido.");
        </script>
        <?php
    }
}

if (isset($_GET['erro'])) {
    switch ($_GET['erro']) {
        case "1":
            ?>
            <script type="text/javascript">
                alert("Você não tem permissão para acessar o sistema.");
            </script>
            <?php
            break;
        case "2":
            ?>
            <script type="text/javascript">
                alert("Você saiu do sistema.");
            </script>
            <?php
            break;
    }
}

if ($_SESSION['logado'] == 1) {
    header ("Location: home");
}

?>