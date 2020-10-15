<?php
	require "conexao.php";
?>
<a href="adicionar.php">Adicionar novo cliente</a>
<table border="0" width="100%">
	<tr>
    		<th>Nome</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>
  <?php

	$sql = "SELECT *FROM cliente";

	$resultado = $pdo->query($sql);

	if($resultado->rowCount()>0){

		foreach($resultado->fetchAll() as $cliente){
			echo '<tr>';
			echo '<td>'.$cliente['nome'].'<td>';
			echo '<td>'.$cliente['email'].'<td>';
			echo '<td><a href="editar.php?id='.$cliente['id'].'">Editar</a>-<a href="excluir.php?id='.$cliente['id'].'">Excluir</a><td>';
			echo '</tr>';
		}

	}else{
		echo "Não tem cliente";
	}

  ?>
</table>
