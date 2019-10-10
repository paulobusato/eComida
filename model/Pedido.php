<?php

class Pedido {
  public $id;
  public $cliente;
  public $data;
  public $valorTotal;

  public function __construct($id, $cliente, $data, $valorTotal) {
    $this->id = $id;
    $this->cliente = $cliente;
    $this->data = $data;
    $this->valorTotal = $valorTotal;
  }

  function getId() {
    return $this->id;
  }

  function getCliente() {
    return $this->cliente;
  }
  function setCliente($cliente) {
    $this->cliente = $cliente;
  }

  function getData() {
    return $this->data;
  }
  function setData($data) {
    $this->data = $data;
  }

  function getvalorTotal() {
    return $this->valorTotal;
  }
  function setvalorTotal($valorTotal) {
    $this->valorTotal = $valorTotal;
  }
}

?>