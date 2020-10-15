<?php

if(isset($_POST["numero"]) && !empty($_POST["numero"])){
	
	$numero = $_POST["numero"];

	$contador = 0;

	while($contador<=10){

		$resultado = $numero * $contador;

		echo $numero." x ".$contador." = ".$resultado."<br/>";

		$contador++;

	}
}
?>
<hr/>
<form method="POST">
	<h1>Escolha um número para calcular a tabuada!</h1>
        <h2>Tabuada com while</h2>
	Numero:<br/>
	<input type="number" name="numero" /><br/>
	<input type="submit" name="Calcular" /><br/>
</form>
