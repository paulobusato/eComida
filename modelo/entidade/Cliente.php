<?php
require_once('/workspaces/eComida/modelo/entidade/Usuario.php');

class Cliente extends Usuario
{
    private $nome;
    private $sobrenome;
    private $cpf;

    public function __construct($nome, $sobrenome, $cpf, $email, $senha, $telefone, $cep, $logradouro, $numero, $bairro, $cidade)
    {
        parent::__construct($email, $senha, $telefone, $cep, $logradouro, $numero, $bairro, $cidade);
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function getSobrenome()
    {
        return $this->sobrenome;
    }
}

?>