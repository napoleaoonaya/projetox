<?php


function somarNumero($numero1, $numero2){
	return $numero1 + $numero2;
}

function subtrairNumero($numero1, $numero2){
	$subtracao = $numero1 - $numero2;
	return $subtracao;
}

function multiplicarNumero($numero1, $numero2){
	return $numero1 * $numero2;
}

function dividirNumero($numero1, $numero2){
	return $numero1 / $numero2;
}

function chamarNumero($numero1){
	echo $numero1;
}

echo "Cuidado, quando criar a função usar sempre o return, veja abaixo um exemplo quando usamos echo ao inves de return dentro da função"."<br/>";

$numero = chamarNumero(999999);

echo "O número digitado é: ".$numero."<br/>";

echo "Veja que o echo executa primeiro trazendo sempre o número antes do texto, e deixando a variavel vazia"."<br/>";

$soma = somarNumero(10,20);

echo "A soma armazenando dentro de uma variavel: ".$soma."<br/>";

echo "A soma chamando a função direta: ".somarNumero(10,20);

//exercicio

?>
