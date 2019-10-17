<?php

require_once("../modelo/dao/EstabelecimentoDao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$resultado = (new EstabelecimentoDao())->login($usuario, $senha);
$estabelecimento;

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_array()) {
        $estabelecimento = array(
            "idEstabelecimento" => $row["idEstabelecimento"],
            "RazaoSocial" => $row["RazaoSocial"],
            "NomeFantasia" => $row["NomeFantasia"]
        );
    }
}

$view = new View("../visao/administrativo/estabelecimento.cadastro.php", $estabelecimento);
$view->showContent();

?>