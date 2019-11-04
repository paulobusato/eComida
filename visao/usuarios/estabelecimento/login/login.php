<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="/visao/compartilhado/rodape/rodape.css">
  <link rel="stylesheet" href="login.css">
  <title>Login - eComida</title>
</head>
<body>
  <section class="imagem-fundo"></section>
  <header class="cabecalho-principal">
      <nav class="cabecalho-principal__navegacao">
          <h1>
              <a href="/index.php" class="cabecalho-principal__navegacao__titulo">eComida</a>
          </h1>
          <a href="/visao/usuarios/login/login.php" class="btn-entrar cabecalho-principal__navegacao__entrar">Entrar</a>
          <a href="/visao/usuarios/login/login.php" class="icon-entrar"><i class="material-icons">account_circle</i></a>
      </nav>
      <hr class="cabecalho-principal__divisor">
  </header>
  <main class="container animated bounceInLeft">
    <section class="entrar">
      <h1 class="entrar__titulo">Entrar</h1>
      <form action="/controle/LoginAction.php" method="POST" class="entrar-formulario">
        <input class="entrar__input" type="text" name="email" id="email" placeholder="Email">
        <input class="entrar__input" type="password" name="senha" id="senha" placeholder="Senha">
        <button class="entrar__button" type="submit" name="btnEntrarEstabelecimento">Entrar</button>
      </form>
    </section>
  </main>
  <?php require_once('/workspaces/eComida/visao/compartilhado/rodape/rodape.php'); ?>
</body>
</html>