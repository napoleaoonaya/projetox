<?php

require "conexao.php";

	if(isset($_POST["nome"]) && !empty($_POST["nome"])){

		$nome = addslashes($_POST[nome]);
		$email = addslashes($_POST[email]);
		$senha = md5(addslashes($_POST[senha]));

		$sql = "INSERT INTO cliente SET nome='$nome',email='$email',senha='$senha'";

		$pdo->query($sql);

		header("Location: revista.php");
	}
?>
<form method="POST">
  Nome:<br/>
  <input type="text" name="nome"/><br/><br/>
  Email:<br/>
  <input type="text" name="email"/><br/><br/>
  Senha:<br/>
  <input type="password" name="senha"/><br/><br/>

  <input type="submit" name="Cadastrar"/>
</form>
