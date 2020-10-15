<?php
	$data = date("d/m/Y \à\s H:i:s");
	echo $data."<br/>";

	$tempo = time();
	echo $tempo."<br/>";

	$tempo2 = mktime(0,0,0,13,10,2020);
	echo $tempo2."<br/>";

	$tempo3 = strtotime("now");
	echo $tempo3."<br/>";

	$tempo4 = date("d/m/Y",strtotime("+10 days"));
	echo $tempo4;

?>
