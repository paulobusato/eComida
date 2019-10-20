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
    <form action="" class="cadastro-formulario">
        <h2 class="cadastro-formulario__titulo">Cadastro</h2>
        <address>
            <section class="primeiro-bloco">
                <h3>Pessoal</h3>
                <input type="text" placeholder="Nome">
                <input type="text" placeholder="Sobrenome">
                <input type="tel" placeholder="Telefone">
                </section>
                <section class="segundo-bloco">
                <h3>Endereço de entrega</h3>
                <input type="text" placeholder="Logradouro">
                <input type="text" placeholder="Numero">
                <input type="text" placeholder="Bairro">
                <input type="text" placeholder="Cidade">
            </section>
        </address>
        <section class="cadastro-navegacao">
            <a href="/visao/usuarios/login/login.php" class="btnCancelar">Cancelar</a>
            <a href="#" class="btnConfirmar">Confirmar</a>
        </section>
    </form>
  <?php require_once('/workspaces/eComida/visao/compartilhado/rodape/rodape.php'); ?>
</body>
</html>