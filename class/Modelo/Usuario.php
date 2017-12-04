<?php

require_once __DIR__ . '/../Persistencia/PDOFactory.php';
/**
* 
*/
class Usuario
{
	private $id;
	private $nome;
	private $sobrenome;

	public function __construct($params = [])
	{
		foreach ($params as $key => $value) {
			$this->$key = $value;
		}
	}

	public function __get($nome)
	{
		return $this->$nome;
	}

	public function __set($nome, $value)
	{
		$this->$nome = $value;
	}

	public static function listarTodos()
	{
		$pdo = PDOFactory::getConnection();
		$stmt = $pdo->prepare('select * from usuarios');
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuario');
	}

	public function salvar()
	{
		$pdo = PDOFactory::getConnection();
		$stmt = $pdo->prepare('insert into usuarios (nome, sobrenome) values (?, ?)');
		$stmt->bindValue(1, $this->nome);
		$stmt->bindValue(2, $this->sobrenome);

		return $stmt->execute();
	}
}