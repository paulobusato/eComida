<?php
require_once("Dao.php");
require_once("/workspaces/eComida/modelo/entidade/Estabelecimento.php");

class EstabelecimentoDao extends Dao
{
	public function inserir($estabelecimento) {
		$sql = "
      INSERT INTO Estabelecimento (RazaoSocial, NomeFantasia, CNPJ, Telefone, Email, Senha, Status, CEP, Logradouro, Numero, Bairro, Cidade, UF)
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
        '{$estabelecimento->getCidade()}',
        '{$estabelecimento->getUF()}'
        )
    ";
    $this->executar($sql);
	}
	
	public function alterar($idEstabelecimento, $estabelecimento) {
    $sql = "
      UPDATE Estabelecimento
      SET RazaoSocial = '{$estabelecimento->getRazaoSocial()}',
          NomeFantasia = '{$estabelecimento->getNomeFantasia()}',
          CNPJ = '{$estabelecimento->getCNPJ()}',
          Telefone = '{$estabelecimento->getTelefone()}',
          Status = '{$estabelecimento->getStatus()}',
          CEP = '{$estabelecimento->getCEP()}',
          Logradouro = '{$estabelecimento->getLogradouro()}',
          Numero = '{$estabelecimento->getNumero()}',
          Bairro = '{$estabelecimento->getBairro()}',
          Cidade = '{$estabelecimento->getCidade()}',
          UF = '{$estabelecimento->getUF()}'
      WHERE idEstabelecimento = '{$idEstabelecimento}'
    ";
		$this->executar($sql);
	}
	
	public function excluir($idEstabelecimento) {
    $sql = "
      DELETE FROM Estabelecimento
      WHERE idEstabelecimento = '{$idEstabelecimento}'
    ";
		$this->executar($sql);
  }
  	
	public function consultar($id = null) {
    $sql = "
      SELECT idEstabelecimento, RazaoSocial, NomeFantasia, CNPJ, Telefone, Status, Email, Senha, CEP, Logradouro, Numero, Bairro, Cidade, UF
      FROM Estabelecimento
      WHERE idEstabelecimento = {$id}
    ";
    $resultado = mysqli_fetch_array($this->executar($sql));

    return new Estabelecimento(
      $resultado["idEstabelecimento"],
      $resultado["RazaoSocial"],
      $resultado["NomeFantasia"],
      $resultado["CNPJ"],
      $resultado["Status"],
      $resultado["Email"],
      $resultado["Senha"],
      $resultado["Telefone"],
      $resultado["CEP"],
      $resultado["Logradouro"],
      $resultado["Numero"],
      $resultado["Bairro"],
      $resultado["Cidade"],
      $resultado["UF"]
    );
  }
  
  public function login($email, $senha) {
    $sql = "
      SELECT idEstabelecimento
      FROM Estabelecimento
      WHERE Email = '{$email}'
        AND Senha = '{$senha}'
    ";
    $resultado = $this->executar($sql);
    
    if ($resultado->num_rows > 0) {
      $row = $resultado->fetch_array();
      return $this->consultar($row[0]);
    }
  }
}
?>