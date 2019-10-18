<?php
require_once("Dao.php");
require_once("/workspaces/eComida/modelo/entidade/Estabelecimento.php");

class EstabelecimentoDao extends Dao
{
	public function inserir($estabelecimento) {
		$sql = "
      INSERT INTO ESTABELECIMENTO ('ID', 'RAZAOSOCIAL', 'NOMEFANTASIA', 'CNPJ', 'STATUS')
      VALUES (
        {$estabelecimento->id},
        {$estabelecimento->razaoSocial},
        {$estabelecimento->nomeFantasia},
        {$estabelecimento->cnpj},
        {$estabelecimento->status})
    ";
    $this->executar($sql);
	}
	
	public function alterar($estabelecimento) {
    $sql = "
      UPDATE ESTABELECIMENTO
      SET RAZAOSOCIAL = {$estabelecimento->razaoSocial},
          NOMEFANTASIA = {$estabelecimento->nomeFantasia},
          CNPJ = {$estabelecimento->cnpj},
          STATUS = $estabelecimento->status
      WHERE ID = $estabelecimento->id
    ";
		$this->executar($sql);
	}
	
	public function excluir($estabelecimento) {
    $sql = "
      DELETE ESTABELECIMENTO
      WHERE ID = $estabelecimento->id
    ";
		$this->executar($sql);		
  }
  	
	public function consultar($id = null) {
    $sql = "
      SELECT idEstabelecimento, RazaoSocial, NomeFantasia, CNPJ, Status
      FROM Estabelecimento
    ";
    $resultado = mysqli_fetch_array($this->executar($sql));
    return new Estabelecimento(
      $resultado["idEstabelecimento"],
      $resultado["RazaoSocial"],
      $resultado["NomeFantasia"],
      $resultado["CNPJ"],
      $resultado["Status"]
    );
  }
  
  public function login($usuario, $senha) {
    $sql = "
      SELECT idEstabelecimento
      FROM Estabelecimento
      WHERE Usuario = '{$usuario}'
        AND Senha = {$senha}
    ";

    $resultado = $this->executar($sql);

    if ($resultado->num_rows > 0) {
      $row = $resultado->fetch_array();
      return $this->consultar();
    }
  }
}
?>