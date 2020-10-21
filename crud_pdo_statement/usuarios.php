<?php
class Usuarios {

	private $db;

	public function __construct() {

	    try {
		$this->db = new PDO("mysql:dbname=blog;host=localhost", "root", "162130");
            } catch(PDOException $e) {
		echo "Falha: ".$e->getMessage();
	    }

	}

	public function selecionar($id) {

	    $sql = $this->db->prepare("SELECT *FROM usuarios WHERE id = :id");
	    $sql->bindValue(":id", $id);
	    $sql->execute();

	    $usuario = array();

	    if($sql->rowCount() > 0) {
		$usuario = $sql->fetch();
            }
	    return $usuario;
	}

	public function inserir($nome, $senha) {

	    $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, senha = :senha");
	    $sql->bindParam(":nome", $nome);
	    $sql->bindValue(":senha", md5($senha));

	    $sql->execute();

	}

	public function atualizar($nome, $senha, $id) {

	    $sql = $this->db->prepare("UPDATE usuarios SET nome = ?, senha = ? WHERE id = ?");
	    $sql->execute(array($nome, md5($senha), $id));

	}

	public function deletar($id) {

	   $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
	   $sql->bindValue(1, $id);
	   $sql->execute();

	}

}
