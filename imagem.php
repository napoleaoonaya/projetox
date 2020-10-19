
<?php

//PHP GD

$arquivo = "woman-in-a-halloween-costume.jpeg";

//Definindo largura(width) e altura(height)
$largura = 200;
$altura = 200;

list($largura_original,$altura_original)=getimagesize($arquivo);


$ratio = $largura_original / $altura_original;

//echo $ratio."<br/>";

if(($largura/$altura)>$ratio){
	$largura = $altura * $ratio;
}else{
	$altura = $largura / $ratio;
}

//echo "Largura original: ".$largura_original." - "."Altura original: ".$altura_original."<br/>";
//echo "Largura: ".$largura." - "." Altura : ".$altura."<br/>";

$imagem_final = imagecreatetruecolor($largura,$altura);

$imagem_original = imagecreatefrompng($arquivo);

imagecopyresampled($imagem_final,$imagem_original,
	0,0,0,0,
	$largura,$altura,$largura_original,$altura_original);

header("Content-Type: image/png");
imagepng($imagem_final,"mini_imagem.png");

echo "imagem redimencionada com sucesso";

//teste

?>
