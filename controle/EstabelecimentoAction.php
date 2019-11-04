<?php
require_once("/workspaces/eComida/modelo/dao/EstabelecimentoDao.php");
require_once("/workspaces/eComida/modelo/entidade/Estabelecimento.php");

session_start();

$estabelecimentoDao = new EstabelecimentoDao();

if (isset($_POST["btnCadastrar"]) || isset($_POST["btnSalvar"])) {
	$estabelecimento = new Estabelecimento(
		"",
		$_POST["razaoSocial"], 
		$_POST["nomeFantasia"], 
		$_POST["cnpj"],
		"P",
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

	if (isset($_POST["btnCadastrar"])) {
		$estabelecimentoDao->inserir($estabelecimento);
		$_SESSION["estabelecimento"] = $estabelecimentoDao->login($_POST["email"], $_POST["senha"]);
	}
	if (isset($_POST["btnSalvar"])) {
		$estabelecimentoDao->alterar($_SESSION["estabelecimento"]->getIdEstabelecimento(), $estabelecimento);
		$_SESSION["estabelecimento"] = $estabelecimentoDao->login($_SESSION["estabelecimento"]->getEmail(), $_SESSION["estabelecimento"]->getSenha());
	}

	header('Location: /visao/administrativo/pedido.lista.php');
}

if (isset($_POST["btnExcluir"])) {
	$idEstabelecimento = $_SESSION["estabelecimento"]->getIdEstabelecimento();

	$estabelecimentoDao->excluir($idEstabelecimento);

	header('Location: /index.php');
}

// var_dump($_POST);

// function obterDadosCadastrais()
// {
// 	return (new EstabelecimentoDao())->consultar();
// }

// require_once("../modelo/entidade/Cliente.php");
// require_once("../modelo/dao/ClienteDao.php");
// require_once("../visao/View.php");

// session_start();
// $listar = FALSE;

// if (isset($_POST["btnCadastrar"])) {
// 	$cliente = new Cliente($_POST["cpf"], $_POST["nome"], $_POST["dt_nasc"],
// 					   $_POST["telefone"], $_POST["rg"]);
// 	$dao = new ClienteDao();
// 	$dao->inserir($cliente);
	
// 	$listar = TRUE;
// }
// if (isset($_POST["btnAlterar"])) {
// 	$cliente = new Cliente($_POST["cpf"], $_POST["nome"], $_POST["dt_nasc"],
// 					   $_POST["telefone"], $_POST["rg"]);
// 	$dao = new ClienteDao();
// 	$dao->alterar($cliente);

// 	$listar = TRUE;
// }
// if (isset($_GET["novoCadastro"])) {
// 	$v = new View("../visao/ClienteCad.php", null);
// 	$v->showContent();	
	
// }
// if (isset($_GET["editar"])) {
// 	$dao = new ClienteDao();
// 	$c = $dao->get($_GET["id"]);
// 	$params["cliente"] = $c;
// 	$params["editar"] = TRUE;
// 	$v = new View("../visao/ClienteCad.php", $params);
// 	$v->showContent();		
// }

// if (isset($_GET["excluir"])) {
// 	$dao = new ClienteDao();
// 	$c = $dao->excluir(new Cliente($_GET["id"], "","","",""));
	
// 	$listar = TRUE;
// }

// if ($listar) {
// 	$dao = new ClienteDao();
// 	$clientes = $dao->consultar();
	
// 	$params["listaClientes"] = (new ClienteDao())->consultar();
	
// 	$v = new View("../visao/ClienteList.php", $params);
// 	$v->showContent();
// }

?>