<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="/visao/compartilhado/rodape/rodape.css">
  <link rel="stylesheet" href="cadastro.estabelecimento.css">
  <title>Login - eComida</title>
</head>
<body>
    <header class="cabecalho-principal">
        <nav class="cabecalho-principal__navegacao">
            <h1>
                <a href="/index.html" class="cabecalho-principal__navegacao__titulo">eComida</a>
            </h1>
            <a href="/visao/usuarios/login/login.php" class="btn-entrar cabecalho-principal__navegacao__entrar">Entrar</a>
            <a href="/visao/usuarios/login/login.php" class="icon-entrar"><i class="material-icons">account_circle</i></a>
        </nav>
        <hr class="cabecalho-principal__divisor">
    </header>
    <form action="/controle/EstabelecimentoAction.php" method="POST" class="cadastro-formulario">
        <h2 class="cadastro-formulario__titulo">Cadastro</h2>
        <address>
            <section class="primeiro-bloco">
                <h3>Básico</h3>
                <input type="text" name="razaoSocial" placeholder="Razao Social">
                <input type="text" name="nomeFantasia" placeholder="Nome Fantasia">
                <input type="number" name="cnpj" placeholder="CNPJ">
                <input type="tel" name="telefone" placeholder="Telefone">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="password" name="senha" placeholder="Senha">
                </section>
                <section class="segundo-bloco">
                <h3>Endereço</h3>
                <input type="number" name="cep" placeholder="CEP">
                <input type="text" name="logradouro" placeholder="Logradouro">
                <input type="text" name="numero" placeholder="Numero">
                <input type="text" name="bairro" placeholder="Bairro">
                <input type="text" name="cidade" placeholder="Cidade">
                <input type="text" name="uf" placeholder="UF">
            </section>
        </address>
        <section class="cadastro-navegacao">
            <a href="/visao/usuarios/login/login.php" class="btnCancelar">Cancelar</a>
            <button type="submit" name="btnCadastrar" class="btnConfirmar">Confirmar</button>
        </section>
    </form>
  <?php require_once('/workspaces/eComida/visao/compartilhado/rodape/rodape.php'); ?>
</body>
</html>