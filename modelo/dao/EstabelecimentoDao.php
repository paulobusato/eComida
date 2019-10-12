<?php
require_once("Dao.php");
require_once("../../modelo/entidade/Estabelecimento.php");

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
      SELECT ID, RAZAOSOCIAL, NOMEFANTASIA, CNPJ, STATUS
      FROM ESTABELECIMENTO
    ";
    $resultado = mysqli_fetch_array($this->executar($sql));
    return new Estabelecimento(
      $resultado["ID"],
      $resultado["RAZAOSOCIAL"],
      $resultado["NOMEFANTASIA"],
      $resultado["CNPJ"],
      $resultado["STATUS"]
    );
	}
}
?>