<?php

require_once("Conexao.php");

class usuarioDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    function cadastrar(usuario $entUsuario) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO usuario VALUES ( 0, :us_usuario, :us_nome, :us_email, :us_sexo, :us_data, :us_hora, :us_ip)");
            $param = array(
                ":us_usuario" => $entUsuario->getUs_usuario(),
                ":us_nome" => $entUsuario->getUs_nome(),
                ":us_email" => $entUsuario->getUs_email(),
                ":us_sexo" => $entUsuario->getUs_sexo(),
                ":us_data" => date("Y/m/d"),
                ":us_hora" => date("h:i:s"),
                ":us_ip" => $_SERVER["REMOTE_ADDR"]
            );

            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo "ERRO 01: {$ex->getMessage()}";
        }
    }

    function consultarCodUsuario($us_usuario) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE us_usuario = :us_usuario");
            $param = array(":us_usuario" => $us_usuario);


            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {

                $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consulta['us_cod'];
            } else {
                return "";
            }
        } catch (PDOException $ex) {
            echo "ERRO 02: {$ex->getMessage()}";
        }
    }

    function consultarCodUsuarioEmail($us_email) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE us_email = :us_email");
            $param = array(":us_email" => $us_email);


            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {

                $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consulta['us_cod'];
            } else {
                return "";
            }
        } catch (PDOException $ex) {
            echo "ERRO 02: {$ex->getMessage()}";
        }
    }

    function consultarUsuario($us_usuario) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE us_usuario = :us_usuario");
            $param = array(":us_usuario" => $us_usuario);

            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 03: {$ex->getMessage()}";
        }
    }

    function login($us_usuario, $se_senha) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario INNER JOIN senha on senha.us_cod = usuario.us_cod WHERE usuario.us_usuario = :us_usuario AND senha.se_senha = :se_senha");

            $param = array(
                ":us_usuario" => $us_usuario,
                ":se_senha" => md5($se_senha)
            );


            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 04: {$ex->getMessage()}";
        }
    }
	
	public function RetornaNome($usuario){
		try{
			
			$stmt = $this->pdo->prepare("SELECT us_nome FROM usuario WHERE us_usuario = :usuario");
			$param = array(
				":usuario"  => $usuario
			);
			
		 $stmt->execute($param);
			
			$dados = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return $dados["us_nome"];
			
			
		}catch (PDOException $ex) {
            echo "ERRO 04: {$ex->getMessage()}";
			return null;
        }
	}

}

?>