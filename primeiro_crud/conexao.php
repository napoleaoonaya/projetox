<?php

$dsn = "mysql:dbname=revista;host=localhost";
$dbuser = "root";
$dbpass = "162130";

try{

	$pdo = new PDO($dsn,$dbuser,$dbpass);

}catch(PDOException $e){

	echo "Falha na conexão com o banco! erro: ".$e->getMessage();

}


?>
