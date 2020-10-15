<?php
$nome = "Napoleão Kazu Onaya";

$x = explode(" ",$nome);

echo "Uso do explode"."<br/>";

print_r($x);

echo "<br/>";

echo "<br/>";

var_dump($x);

echo "<br/>";


$produtos = array("Caneco","Panela","Copos","Caçarola");

$y = implode("-",$produtos);

echo "<br/>";

echo "Uso do implode"."<br/>";

print_r($y);

echo "<br/>";

echo "<br/>";

echo "Uso do number_format";

$numero = 2934518.28324578;

echo "<br/>";

$z = number_format($numero,2,",",".");

echo $z;

echo "<br/>";
echo "<br/>";

echo "O uso do str_replace"."<br/>";

$texto = "O rato roeu a roupa do rei de roma";

echo $texto."<br/>";

$texto2 = str_replace("roeu","comeu",$texto);

echo $texto2."<br/>";

echo "<br/>";

$nomeCompleto = "NAPOLEAO KAZU ONAYA";

echo $nomeCompleto."<br/>";

$nomeMinusculo = strtolower($nomeCompleto);

echo "<br/>";
echo "Uso do strtolower"."<br/>";
echo $nomeMinusculo."<br/>";

echo "<br/>";

echo "Uso do strtoupper"."<br/>";
$nomeMaiusculo = strtoupper($nomeMinusculo);
echo $nomeMaiusculo."<br/>";

echo "<br/>";

echo "Uso da substrg"."<br/>";

$nomeAtila = "Atila Felipe Onaya";

echo $nomeAtila."<br/>";

$nomeCortado = substr($nomeAtila,0,5);

echo $nomeCortado;

echo "<br/>";

echo "<br/>";

echo "Uso do ucfirst"."<br/>";

$nomeDaniel = "daniel de sousa onaya";

$nomeDanielComLetraMaiuscula = ucfirst($nomeDaniel);

echo $nomeDanielComLetraMaiuscula."<br/>";

echo "<br/>";
echo "<br/>";

echo "Uso do ucwords"."<br/>";
$nomeDanielMaisculoCompleto = ucwords($nomeDanielComLetraMaiuscula);

echo $nomeDanielMaisculoCompleto."<br/>";

echo "<br/>";
echo "<br/>";


?>
