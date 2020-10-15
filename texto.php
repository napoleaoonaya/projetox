<?php

$nome = "Napoleão Kazu Onaya";

$x = explode(" ",$nome);

print_r($x);

echo "<br/>";

foreach($x as $chave => $valor){
	echo $chave." - ".$valor."<br/>";
}

?>
