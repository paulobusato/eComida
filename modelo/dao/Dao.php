<?php
require_once("connection.php");

abstract class Dao
{
	protected function executar($sql) {
		return (Connection::obterConexao())->query($sql);
	}
	
	public abstract function inserir($entidade);
	public abstract function alterar($id, $entidade);
  	public abstract function excluir($id);
  	public abstract function consultar($id);
}
?>