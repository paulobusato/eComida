<?php
require_once("Dao.php");
require_once("/workspaces/eComida/modelo/entidade/Cliente.php");

class ClienteDao extends Dao
{
    public function inserir($cliente)
    {
        $sql = "
        INSERT INTO `Cliente` (`nome`, `telefone`, `cpf`, `email`, `senha`, `logradouro`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `dataCadastro`)
        VALUES ('{$cliente->getNome()}', '{$cliente->getTelefone()}', '{$cliente->getCPF()}', '{$cliente->getEmail()}', '{$cliente->getSenha()}', '{$cliente->getLogradouro()}', '{$cliente->getNumero()}',
                '{$cliente->getBairro()}', '{$cliente->getCidade()}', '{$cliente->getUF()}', '{$cliente->getCEP()}', CURRENT_TIMESTAMP)";
        $this->executar($sql);
    }

    public function alterar($cliente)
    {

    }

    public function excluir($id) {

    }

    public function consultar($id) {

    }
}

?>