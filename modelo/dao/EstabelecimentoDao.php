<?php
require_once("Dao.php");
require_once("/workspaces/eComida/modelo/entidade/Estabelecimento.php");

class EstabelecimentoDao extends Dao
{
	public function inserir($estabelecimento) {
		$sql = "
      INSERT INTO Estabelecimento (RazaoSocial, NomeFantasia, CNPJ, Telefone, Email, Senha, Status, CEP, Logradouro, Numero, Bairro, Cidade)
      VALUES (
        '{$estabelecimento->getRazaoSocial()}',
        '{$estabelecimento->getNomeFantasia()}',
        '{$estabelecimento->getCNPJ()}',
        '{$estabelecimento->getTelefone()}',
        '{$estabelecimento->getEmail()}',
        '{$estabelecimento->getSenha()}',
        '{$estabelecimento->getStatus()}',
        '{$estabelecimento->getCEP()}',
        '{$estabelecimento->getLogradouro()}',
        '{$estabelecimento->getNumero()}',
        '{$estabelecimento->getBairro()}',
        '{$estabelecimento->getCidade()}'
        )
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
      SELECT RazaoSocial, NomeFantasia, CNPJ, Telefone, Email, Senha, Status, CEP, Logradouro, Numero, Bairro, Cidade
      FROM Estabelecimento
      WHERE idEstabelecimento = {$id}
    ";
    $resultado = mysqli_fetch_array($this->executar($sql));

    return new Estabelecimento(
      $resultado["RazaoSocial"],
      $resultado["NomeFantasia"],
      $resultado["CNPJ"],
      "",
      $resultado["Email"],
      "",
      $resultado["Telefone"],
      $resultado["CEP"],
      $resultado["Logradouro"],
      $resultado["Numero"],
      $resultado["Bairro"],
      $resultado["Cidade"]
    );
  }
  
  public function login($email, $senha) {
    $sql = "
      SELECT idEstabelecimento
      FROM Estabelecimento
      WHERE Email = '{$email}'
        AND Senha = {$senha}
    ";
    $resultado = $this->executar($sql);
    
    if ($resultado->num_rows > 0) {
      $row = $resultado->fetch_array();
      return $this->consultar($row[0]);
    }
  }
}
?>