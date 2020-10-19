<?php

class Cachorro {

	private $nome;
	private $idade;
	public $comeRacao;

	public function __construct($nome,$idade){
		$this->setNome($nome);
		$this->setIdade($idade);
	}

	public function latir(){
		echo "Au au au";
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

}

$dog = new Cachorro("Sofia",3);

$dog->comeRacao = true;

$dog->latir()."<br/>";

echo "<br/>";

$dog->setNome("Sofia");

echo "Qual seu nome doguinho: ".$dog->getNome()."<br/>";

echo "<br/>";

echo "Todo dog come ração: ".$dog->comeRacao."( 1 - Sim , "." 0 - Não )"."<br/>";

echo "<br/>";

Cachorro::latir();

$dog2 = new Cachorro("Estopinha",3);

echo "<br/>";

echo "Nome: ".$dog2->getNome()." idade: ".$dog2->getIdade();

?>
