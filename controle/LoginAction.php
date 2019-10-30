<?php

require_once("../modelo/dao/EstabelecimentoDao.php");

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$estabelecimentoDao = new EstabelecimentoDao();
$estabelecimento = $estabelecimentoDao->login($email, $senha);

if ($estabelecimento == null) {
    header("Location: ../visao/administrativo/estabelecimento.cadastro.php");    
}

$_SESSION["estabelecimento"] = $estabelecimento;

header("Location: ../visao/administrativo/estabelecimento.cadastro.php");

?>