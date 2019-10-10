<?php

class Estabelecimento
{
  private $id;
  private $razaoSocial;
  private $nomeFantasia;
  private $cnpj;
  private $status;

  public function __construct($id, $razaoSocial, $nomeFantasia, $cnpj, $status) {
    $this->id = $id;
    $this->razaoSocial = $razaoSocial;
    $this->nomeFantasia = $nomeFantasia;
    $this->cnpj = $cnpj;
    $this->status = $status;
  }

  function getId() {
    return $this->id;
  }

  function getRazaoSocial() {
    return $this->razaoSocial;
  }
  function setRazaoSocial($razaoSocial) {
    $this->razaoSocial = $razaoSocial;
  }

  function getNomeFantasia() {
    return $this->nomeFantasia;
  }
  function setNomeFantasia($nomeFantasia) {
    $this->nomeFantasia = $nomeFantasia;
  }
  
  function getCNPJ() {
    return $this->cnpj;
  }
  function setCNPJ($cnpj) {
    $this->cnpj = $cnpj;
  }

  function getStatus() {
    return $this->status;
  }
  function setStatus($status) {
    $this->status = $status;
  }

  function getTodasInformacoes() {
    return array(
      "id" => $this->getId(),
      "razaoSocial" => $this->getRazaoSocial(),
      "nomeFantasia" => $this->getNomeFantasia(),
      "cnpj" => $this->getCNPJ(),
      "status" => $this->getStatus(),
    );
  }
}

$estabelecimento = new Estabelecimento(1, "Paulo", "Busato", "99.999.999/9999-99", "Ativo");