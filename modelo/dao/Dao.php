<?php
require_once("connection.php");

abstract class Dao
{
	protected function executar($sql) {
		return (Connection::obterConexao())->query($sql);
	}
	
	public abstract function inserir($Objeto);
	public abstract function alterar($Objeto);
  	public abstract function excluir($Objeto);
  	public abstract function consultar($id);
}
?>