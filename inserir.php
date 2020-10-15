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
	$titulo = "Ruby";
	$data_criacao = "2020/10/15";
	$corpo = "Aprender Ruby pode ser muito legal,etc...";
	$autor = "Kazushiko Onaya";

	//Insert
	$sql = "INSERT INTO posts SET titulo='$titulo',data_criacao='$data_criacao',corpo='$corpo',autor='$autor'";

	//Usuario inserido no banco
	$resultado = $pdo->query($sql);

	echo "Usuário inserido: "." ID ".$pdo->lastInsertId()."<br/>";

	echo "Inserido posts com sucesso!"."<br/>";


}catch(PDOException $e){

	echo "Falhou a conexão com o banco: ".$e->getMessage();

}


//exercicio


?>
