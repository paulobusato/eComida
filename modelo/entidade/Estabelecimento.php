<?php
require_once('/workspaces/eComida/modelo/entidade/Usuario.php');

class Estabelecimento extends Usuario
{
  private $idEstabelecimento;
  private $razaoSocial;
  private $nomeFantasia;
  private $cnpj;
  private $status;

  public function __construct($razaoSocial, $nomeFantasia, $cnpj, $status, $email, $senha, $telefone, $cep, $logradouro, $numero, $bairro, $cidade, $uf)
  {
    parent::__construct($email, $senha, $telefone, $cep, $logradouro, $numero, $bairro, $cidade, $uf);
    $this->razaoSocial = $razaoSocial;
    $this->nomeFantasia = $nomeFantasia;
    $this->cnpj = $cnpj;
    $this->status = $status;
  }

  public function getIdEstabelecimento()
  {
    return $this->idEstabelecimento;
  }

  public function getRazaoSocial()
  {
    return $this->razaoSocial;
  }

  public function getNomeFantasia()
  {
    return $this->nomeFantasia;
  }

  public function getCNPJ()
  {
    return $this->cnpj;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
?>