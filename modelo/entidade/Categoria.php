<?php

class Categoria
{
    private $idCategoria;
    private $descricao;
    private $idPromocao;

    public function __construct($idCategoria, $descricao, $idPromocao)
    {
        $this->idCategoria = $idCategoria;
        $this->descricao = $descricao;
        $this->idPromocao = $idPromocao;
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getIdPromocao()
    {
        return $this->idPromocao;
    }
}

?>