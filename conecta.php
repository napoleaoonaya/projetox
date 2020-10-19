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

	//Select
	$sql = "SELECT *FROM posts";

	$resultado = $pdo->query($sql);

	if($resultado->rowCount()>0){

		echo "<br/>";

		echo "A posts cadastrados"."<br/>";

		echo "<br/>";

		echo "Efetuando um select no banco de dados!"."<br/>";

		foreach($resultado->fetchAll() as $posts){
			echo "ID: ".$posts["id"].
			     " - Titulo: ".$posts["titulo"].
			     " - Data de criação: ".$posts["data_criacao"].
			     " - Corpo: ".$posts["corpo"].
			     " - Autor: ".$posts["autor"]."<br/>";
		}


	}else{

		echo "Não tem nenhum posts";
		
	}



}catch(PDOException $e){

	echo "Falhou a conexão com o banco: ".$e->getMessage();

}



?>
