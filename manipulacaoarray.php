<?php

$funcionario = array(
"nome" => "Napoleão",
"idade" => 36,
"cidade" => "São Paulo",
"pais" => "Brasil"	
);

print_r($funcionario)."<br/>";

echo "<br/>";

echo "<br/>";

$chaves = array_keys($funcionario);

echo "<br/>";

echo "Uso do array_keys"."<br/>";

print_r($chaves);

echo "<br/>";

echo "<br/>";

echo "Uso do array_values"."<br/>";

$valores = array_values($funcionario);

print_r($valores);

echo "<br/>";

echo "<br/>";

echo "O uso do array_pop"."<br/>";
echo array_pop($funcionario)."<br/>";
print_r($funcionario)."<br/>";

echo "<br/>";

echo "<br/>";
echo "Uso do array_shift"."<br/>";
echo array_shift($funcionario)."<br/>";
print_r($funcionario)."<br/>";

echo "<br/>";

echo "<br/>";

echo "Uso da função asort em ordem crescente"."<br/>";
$nomes = array("Napoleão","Daniel","Atila","Yure","Priscila","Leila","Kazu");

print_r($nomes);

echo "<br/>";
asort($nomes);

print_r($nomes);

echo "<br/>";
echo "<br/>";

echo "Uso da função arsort em ordem decrescente"."<br/>";
arsort($nomes);
print_r($nomes);

echo "<br/>";
echo "<br/>";

echo "O uso da função count"."<br/>";
echo "Total de nomes: ".count($nomes);


echo "<br/>";
echo "<br/>";

echo "Função in_array"."<br/>";

if(in_array("Napoleão",$nomes)){
  echo "O vencedor foi Napoleão";
}else{
  echo "Não foi desta vez";
}


?>
