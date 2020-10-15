<?php
session_start();

//$_SESSION["teste"] = "Napoleão Kazu Onaya";

//echo "A sessão foi feita...";

//echo "Seu nome é: ".$_SESSION["teste"];

//$_SESSION["funcionario"] = array("nome"=>"Miguel","idade"=>21,"profissão"=>"Marceneiro");

//echo "Funcionario criado...";

//$chave = array_values($_SESSION["funcionario"]);

//print_r($chave);

//echo "<br/>";

//if(in_array("Miguel",$_SESSION["funcionario"])){
//	echo "Oi Miguel ";
//}

$senha = "162130";
$secret = md5($senha);

$_SESSION["secret"] = $secret;

echo $_SESSION["secret"]."<br/>";

if($_SESSION["secret"] == $secret){
     echo "Logado com sucesso";
}

//function soma($a,$b){
//	return $a+$b;
//}

//$_SESSION["soma"] = soma(2,4);

//echo $_SESSION["soma"];

?>
