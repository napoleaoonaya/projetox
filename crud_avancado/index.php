<?php

require 'banco/Banco.php';

$banco = new Banco("localhost", "blog", "root", "162130");
/*$banco->query("SELECT * FROM posts");
$numero = $banco->numRows();

echo "Quantidade de posts: ".$numero."<br/>";
echo "Quantidade de posts: ".$banco->numRows()."<br/>";
    
echo "<br/>";    
    
if($banco->numRows() > 0) {    
    foreach($banco->result() as $posts) {
        echo "Titulo: ".$posts["titulo"]."<br/>";
        echo "Data de criação: ".$posts["data_criacao"]."<br/>";
        echo "Corpo: ".$posts["corpo"]."<br/>";
        echo "Autor: ".$posts["autor"]."<br/>";
        echo "<hr/>";
    }
}else{
    echo "Não tem nenhum post";
}

$banco->insert("posts",array(
    "titulo"=>"Teste",
    "data_criacao"=>"2020/10/19",
    "corpo"=>"Teste",
    "autor"=>"Napoleão"));

$banco->update("posts",
    array("titulo"=>"Teste 123"),
    array("id"=>"10", "autor"=>"Napoleão"),
    "AND");

$banco->delete("posts",
    array("id"=>"11","titulo"=>"Teste update"));
*/

$banco->query("SELECT * FROM posts");

var_dump($banco);

?>
