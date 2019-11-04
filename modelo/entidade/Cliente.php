<?php
require_once('/workspaces/eComida/modelo/entidade/Usuario.php');

class Cliente extends Usuario
{
    private $nome;
    private $cpf;

    public function __construct($nome = '', $cpf = '', $email  = '', $senha  = '', $telefone  = '', $cep  = '', $logradouro  = '', $numero  = '', $bairro  = '', $cidade  = '', $uf = '')
    {
        parent::__construct($email, $senha, $telefone, $cep, $logradouro, $numero, $bairro, $cidade, $uf);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function getCPF()
    {
        return $this->cpf;
    }
}

?>