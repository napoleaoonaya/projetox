<?php

$professores = array("Napoleão","Daniel","Atila","Yure","Priscila");

foreach($professores as $professor){
	echo "Bem vindo professor(a): ".$professor."<br/>";
}

$alunos = array(
	array(
		"nome"=>"João",
		"idade"=>21,
		"eja"=>"sim",
		"serie"=>"1º ano ensino médio"
	),
	array(
		"nome"=>"Miguel",
		"idade"=>25,
		"eja"=>"sim",
		"serie"=>"2º ano ensino médio"
	),
	array(
		"nome"=>"Paulo",
		"idade"=>30,
		"eja"=>"sim",
		"serie"=>"3º ano ensino médio"
	),
	array(
		"nome"=>"Raquel",
		"idade"=>18,
		"eja"=>"não",
		"serie"=>"3º ano ensino médio"
	),
	array(
		"nome"=>"Paula",
		"idade"=>18,
		"eja"=>"não",
		"serie"=>"3º ano ensino médio"
	),
	array(
		"nome"=>"Pamela",
		"idade"=>19,
		"eja"=>"não",
		"serie"=>"3º ano ensino médio"
	),
	array(
		"nome"=>"Rafaela",
		"idade"=>18,
		"eja"=>"não",
		"serie"=>"3º ano ensino médio"
	),
	array(
		"nome"=>"Joyce",
		"idade"=>18,
		"eja"=>"não",
		"serie"=>"3º ano ensino médio"
	)
);

echo "<br/>";

foreach($alunos as $aluno){
	echo "Bom dia aluno: ".$aluno["nome"]
	." - idade:  ".$aluno["idade"]
	." - eja:  ".$aluno["eja"]
	." - série:  ".$aluno["serie"]."<br/>";
}

echo "<br/>";

$administrativo = array(
	"nome do funcionario"=>"Joaquim",
	"cargo"=>"diretor",
	"idade"=>"33"
);

foreach($administrativo as $chave => $adm){
	echo $chave." : ".$adm."<br/>";
}
//exercicio
?>
