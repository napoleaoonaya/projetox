<?php

abstract class Animal{

	private $nome;
	private $idade;

	abstract protected function andar();

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


class Cachorro extends Animal{

	public function andar(){
		echo "Andando";
	}

}

$cachorro = new Cachorro();

$cachorro->andar();

?>
