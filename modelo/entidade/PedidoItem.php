<?php

class PedidoItem
{
    private $idPedido;
    private $idPedidoItem;
    private $idProduto;
    private $quantidade;
    private $valor;

    public function __construct($idPedido, $idPedidoItem, $idProduto, $quantidade, $valor)
    {
        $this->idPedido = $idPedido;
        $this->idPedidoItem = $idPedidoItem;
        $this->idProduto = $idProduto;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
    }

    public function getIdPedido()
    {
        return $this->idPedido;
    }

    public function getIdPedidoItem()
    {
        return $this->idPedidoItem;
    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getValor()
    {
        return $this->valor;
    }
}

?>