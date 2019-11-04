<?php

class Pedido
{
  private $idPedido;
  private $cliente;
  private $data;
  private $valorTotal;

  public function __construct($idPedido, $cliente, $data, $valorTotal)
  {
    $this->idPedido = $idPedido;
    $this->cliente = $cliente;
    $this->data = $data;
    $this->valorTotal = $valorTotal;
  }

  public function getIdPedido()
  {
    return $this->idPedido;
  }
  
  public function getCliente()
  {
    return $this->cliente;
  }
  
  public function getData()
  {
    return $this->data;
  }

  public function getValorTotal()
  {
    return $this->valorTotal;
  }
}

?>