<?php

if(isset($_POST["numero"]) && !empty($_POST["numero"])){

   $numero = $_POST["numero"];

	for($i=0;$i<=10;$i++){

		$resultado = 0;
		$resultado = $numero * $i;
		echo $numero." x ".$i." = ".$resultado."<br/>";

	}
}
?>
<hr/>
<form method="POST">
  <h1>Escolha um número para calcular a tabuada</h1>
  <h2>Tabuada com for</h2>
  Numero:<br/>
  <input type="number" name="numero" /><br/>
  <input type="submit" name="Calcular!"/>
</form>
