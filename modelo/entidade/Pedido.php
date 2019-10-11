<?php
class Pedido
{
  private $id;
  private $cliente;
  private $data;
  private $valorTotal;

  public function __construct($id, $cliente, $data, $valorTotal) {
    $this->id = $id;
    $this->cliente = $cliente;
    $this->data = $data;
    $this->valorTotal = $valorTotal;
  }
}