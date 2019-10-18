<?php

require_once("../modelo/dao/EstabelecimentoDao.php");

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$estabelecimentoDao = new EstabelecimentoDao();
$estabelecimento = $estabelecimentoDao->login($usuario, $senha);

$_SESSION["estabelecimento"] = $estabelecimento;

header("Location: ../visao/administrativo/estabelecimento.cadastro.php");

?>