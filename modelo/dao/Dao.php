<?php
abstract class Dao
{
	protected function executar($sql) {
		$conexao = mysqli_connect("localhost", "root", "", "ecomida");
		$resultado = mysqli_query($conexao, $sql);
		mysqli_close($conexao);
		return $resultado;
	}
	
	public abstract function inserir($Objeto);
	public abstract function alterar($Objeto);
  public abstract function excluir($Objeto);
  public abstract function consultar($id);
}