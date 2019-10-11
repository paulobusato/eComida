<?php
require_once("Dao.php");
require_once("../entidade/Estabelecimento.php");

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
		$this->executar($sql);
	}
}