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

    public function alterar($idCliente, $cliente)
    {

    }

    public function excluir($id) {

    }

    public function consultar($id) {
        $sql = "
            SELECT Cliente.nome
            FROM Cliente
            WHERE idCliente = '{$id}'
        ";
        $resultado = $this->executar($sql);

        if ($resultado->num_rows > 0) {
            $cliente = $resultado->fetch_array();
            return new Cliente($cliente["nome"]);
        }
    }

    public function login($email, $senha) {
        $sql = "
            SELECT idCliente
            FROM Cliente
            WHERE email = '{$email}'
                AND senha = '{$senha}'
        ";
        $resultado = $this->executar($sql);

        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_array();
            return $this->consultar($row[0]);
        }
    }
}

?>