<?php
class Estabelecimento
{
  private $idEstabelecimento;
  private $razaoSocial;
  private $nomeFantasia;
  private $cnpj;
  private $status;

  public function __construct($idEstabelecimento, $razaoSocial, $nomeFantasia, $cnpj, $status) {
    $this->idEstabelecimento = $idEstabelecimento;
    $this->razaoSocial = $razaoSocial;
    $this->nomeFantasia = $nomeFantasia;
    $this->cnpj = $cnpj;
    $this->status = $status;
  }

  public function getIdEstabelecimento() {
    return $this->idEstabelecimento;
  }

  public function getRazaoSocial() {
    return $this->razaoSocial;
  }

  public function getNomeFantasia() {
    return $this->nomeFantasia;
  }

  public function getCNPJ() {
    return $this->cnpj;
  }

  public function getStatus() {
    return $this->status;
  }
}
?>