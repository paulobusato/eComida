<?php

class Promocao
{
    private $idPromocao;
    private $descricao;
    private $dataInicio;
    private $dataFim;
    private $percentual;

    public function __construct($idPromocao, $descricao, $dataInicio, $dataFim, $percentual)
    {
        $this->idPromocao = $idPromocao;
        $this->descricao = $descricao;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->percentual = $percentual;
    }

    public function getIdPromocao()
    {
        return $this->idPromocao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function getDataFim()
    {
        return $this->dataFim;
    }

    public function getPercentual()
    {
        return $this->percentual;
    }
} 

?>