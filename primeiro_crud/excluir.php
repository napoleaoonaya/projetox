<?php
	require "conexao.php";

	if(isset($_GET["id"]) && !empty($_GET["id"])){

		$id = addslashes($_GET["id"]);

		$sql = "DELETE FROM cliente WHERE id='$id'";

		$pdo->query($sql);

		header("Location: revista.php");

	}else{
		header("Location: revista.php");
	}

?>
