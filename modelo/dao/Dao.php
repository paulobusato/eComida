<?php
abstract class Dao
{
	// protected function executar($sql) {
	// 	$conexao = mysqli_connect("172.17.0.2", "root", "", "eComida");
	// 	$resultado = mysqli_query($conexao, $sql);
	// 	mysqli_close($conexao);
	// 	return $resultado;
	// }
	protected function executar($sql) {
		$dbPassword = "";
		$dbUserName = "root";
		$dbServer = "172.17.0.2";
		$dbName = "eComida";

		$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

		if($connection->connect_errno) {
			exit("Database Connection Failed. Reason: {$connection->connect_error}");
		}

		return $connection->query($sql);
	}
	
	public abstract function inserir($Objeto);
	public abstract function alterar($Objeto);
  	public abstract function excluir($Objeto);
  	public abstract function consultar($id);
}
?>