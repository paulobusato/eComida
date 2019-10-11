<?
require_once("../modelo/entidade/Cliente.php");
require_once("../modelo/dao/ClienteDao.php");
require_once("../visao/View.php");

session_start();
$listar = FALSE;

if (isset($_POST["btnCadastrar"])) {
	$cliente = new Cliente($_POST["cpf"], $_POST["nome"], $_POST["dt_nasc"],
					   $_POST["telefone"], $_POST["rg"]);
	$dao = new ClienteDao();
	$dao->inserir($cliente);
	
	$listar = TRUE;
}
if (isset($_POST["btnAlterar"])) {
	$cliente = new Cliente($_POST["cpf"], $_POST["nome"], $_POST["dt_nasc"],
					   $_POST["telefone"], $_POST["rg"]);
	$dao = new ClienteDao();
	$dao->alterar($cliente);

	$listar = TRUE;
}
if (isset($_GET["novoCadastro"])) {
	$v = new View("../visao/ClienteCad.php", null);
	$v->showContent();	
	
}
if (isset($_GET["editar"])) {
	$dao = new ClienteDao();
	$c = $dao->get($_GET["id"]);
	$params["cliente"] = $c;
	$params["editar"] = TRUE;
	$v = new View("../visao/ClienteCad.php", $params);
	$v->showContent();		
}

if (isset($_GET["excluir"])) {
	$dao = new ClienteDao();
	$c = $dao->excluir(new Cliente($_GET["id"], "","","",""));
	
	$listar = TRUE;
}

if ($listar) {
	$dao = new ClienteDao();
	$clientes = $dao->consultar();
	
	$params["listaClientes"] = (new ClienteDao())->consultar();
	
	$v = new View("../visao/ClienteList.php", $params);
	$v->showContent();
}

?>