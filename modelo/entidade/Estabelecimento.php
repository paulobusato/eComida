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
}
?>