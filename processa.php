<?php
if(isset($_POST["email"]) && !empty($_POST["email"])){
	$email = $_POST["email"];
	echo "Seu e-mail é: ".$email;
}
//exercicio