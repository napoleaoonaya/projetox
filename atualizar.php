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
	$id = 1;
	$autor = "Natalia Yure Onaya";

	//Update
	$sql = "UPDATE posts SET autor='$autor' WHERE id='$id'";

	//Executando o update
	$resultado = $pdo->query($sql);

	echo "Post atualizado com sucesso!"."<br/>";


}catch(PDOException $e){

	echo "Falhou a conexão com o banco: ".$e->getMessage();

}





?>
