<?php

class Produto
{
    private $idProduto;
    private $descricao;
    private $valor;

    public function __construct($idProduto, $descricao, $valor)
    {
        $this->idProduto = $idProduto;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }
}

?>