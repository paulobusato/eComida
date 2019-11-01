<?php

class Usuario
{
    private $email;
    private $senha;
    private $telefone;
    private $cep;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;

    public function __construct($email, $senha, $telefone, $cep, $logradouro, $numero, $bairro, $cidade, $uf)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone = $telefone;
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getCEP()
    {
        return $this->cep;
    }
    
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getUF()
    {
        return $this->uf;
    }
}

?>