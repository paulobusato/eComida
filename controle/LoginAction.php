<?php

require_once("../modelo/dao/EstabelecimentoDao.php");
require_once("../modelo/dao/ClienteDao.php");

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (isset($_POST["btnEntrarCliente"])) {
    $clienteDao = new ClienteDao();
    $nomeCliente = $clienteDao->login($email, $senha);
    $_SESSION["nomeCliente"] = $nomeCliente;
    header('Location: /visao/estabelecimento/estabelecimento.lista/estabelecimento.lista.php');
}

if (isset($_POST["btnEntrarEstabelecimento"])) {
    $estabelecimentoDao = new EstabelecimentoDao();
    $estabelecimento = $estabelecimentoDao->login($email, $senha);
    if ($estabelecimento == null) {
        header("Location: ../visao/usuarios/estabelecimento/cadastro.estabelecimento.php");
    } else {
        $_SESSION["estabelecimento"] = $estabelecimento;
        header("Location: ../visao/administrativo/estabelecimento.cadastro.php");
    }
}

?>