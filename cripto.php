<?php

echo "Criptografia em md5"."<br/>";

$nome = "Napoleão";

$nomeCripto = md5($nome);

echo $nomeCripto;

echo "<br/>";

echo "<br/>";

echo "Criptografia padrão base64"."<br/>";

$senha = "960qq2MT";

$senhaCripto = base64_encode($senha);

echo $senhaCripto;

echo "<br/>";

$senhaDecode = base64_decode($senhaCripto);

echo $senhaDecode;

echo "<br/>";
//exercicio

?>
