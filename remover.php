<?php

//String de conexão
$dsn = "mysql:dbname=blog;host=localhost";
//Usuario do banco
$dbuser = "root";
//Senha do banco
$dbpass = "162130";	

try{

	//Instanciando a conexão com o banco	
	$pdo = new PDO($dsn,$dbuser,$dbpass);

	//Conectado no banco
	echo "Conectado no banco de dados com sucesso!"."<br/>";

	//Definido variaveis
	$id = 7;

	//Update
	$sql = "DELETE FROM posts WHERE id='$id'";

	//Executando o update
	$resultado = $pdo->query($sql);

	echo "Post deletado com sucesso!"."<br/>";


}catch(PDOException $e){

	echo "Falhou a conexão com o banco: ".$e->getMessage();

}





?>
