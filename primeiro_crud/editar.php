<?php
	require "conexao.php";

	$id = 0;

	if(isset($_GET["id"]) && !empty($_GET["id"])){
		$id = addslashes($_GET["id"]);
	}

	if(isset($_POST["nome"])&& !empty($_POST["nome"])){

		$nome = addslashes($_POST["nome"]);
		$email = addslashes($_POST["email"]);

		$sql = "UPDATE cliente SET nome='$nome', email='$email' WHERE id='$id'";

		$resultado = $pdo->query($sql);

		header("Location: revista.php");
	}


$sql = "SELECT * FROM cliente WHERE id='$id'";
$resultado = $pdo->query($sql);

if($resultado->rowCount()>0){

	$dado = $resultado->fetch();

}else{
	header("Location: revista.php");
}

	
?>
<form method="POST">
  Nome:<br/>
  <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"/><br/><br/>
  Email:<br/>
  <input type="text" name="email" value="<?php echo $dado['email']; ?>"/><br/><br/>
  <input type="submit" name="Atualizar"/>
</form>
