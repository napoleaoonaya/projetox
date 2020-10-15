<?php
	require "conexao.php";

	session_start();

	if(isset($_POST["email"]) && !empty($_POST["email"])){

		$email = addslashes($_POST["email"]);
		$senha = md5(addslashes($_POST["senha"]));

		try{

		$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";

		$resultado = $pdo->query($sql);

			if($resultado->rowCount()>0){

				$dado = $resultado->fetch();

				$_SESSION["id"] = $dado["id"];

				header("Location: index.php");

			}

		}catch(PDOException $e){
			echo "Falha no acesso!: ".$e->getMessage();
		}

	}
?>
pagina de login
<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"/><br/>
	Senha:<br/>
	<input type="password" name="senha"/><br/>
	<input type="submit" name="Entrar"/>
</form>
