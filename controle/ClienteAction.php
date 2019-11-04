<?php

require_once("/workspaces/eComida/modelo/dao/ClienteDao.php");
require_once("/workspaces/eComida/modelo/entidade/Cliente.php");

session_start();

if (isset($_POST["btnCadastrar"])) {
    $clienteDao = new ClienteDao();

    $novoCliente = new Cliente(
        $_POST["nome"],
        $_POST["cpf"],
        $_POST["email"],
        $_POST["senha"],
        $_POST["telefone"],
        $_POST["cep"],
        $_POST["logradouro"],
        $_POST["numero"],
        $_POST["bairro"],
        $_POST["cidade"],
        $_POST["uf"],
    );

    $clienteDao->inserir($novoCliente);

    header('Location: /index.html');
}
?>