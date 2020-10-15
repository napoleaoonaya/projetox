<?php

if(isset($_GET["numero"])&& !empty($_GET["numero"])){
	
	$numero = $_GET["numero"];


		switch($numero){
			  case 1:
			     echo "O número é 1: ".$numero;
				  break;
			  case 2:
			     echo "O número é 2: ".$numero;	   
				  break;
			  case 3: 
			     echo "O número é 3: ".$numero;	  
				  break;
			  default:
			     echo "O número esta fora da escolha! : ".$numero;
				  break;

		}
}
?>
<hr/>
<form method="GET">
  Número:<br/>
  <input type="number" name="numero" /><br/>
  <input type="submit" value="Enviar Dados" />
</form>
