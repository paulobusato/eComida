<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="/visao/compartilhado/cabecalho/cabecalho.css">
  <link rel="stylesheet" href="/visao/compartilhado/rodape/rodape.css">
  <link rel="stylesheet" href="login.css">
  <title>Login - eComida</title>
</head>
<body>
  <section class="imagem-fundo"></section>
  <?php require_once('/workspaces/eComida/visao/compartilhado/cabecalho/cabecalho.php'); ?>
  <main class="container animated bounceInLeft">
    <section class="cadastro">
      <h2 class="cadastro-titulo">Bem-vindo novamente</h2>
      <p class="cadastro-subtitulo">Para realizar pedidos, faça o seu cadastro agora</p>
      <a href="../usuario/cadastro.usuario.php" class="btnCadastrar">Cadastrar</a>
    </section>
    <section class="entrar">
      <h1 class="entrar__titulo">Entrar</h1>
      <form action="#" class="entrar-formulario">
        <input class="entrar__input" type="text" name="usuario" id="usuario" placeholder="Usuário">
        <input class="entrar__input" type="password" name="senha" id="senha" placeholder="Senha">
      </form>
      <button class="entrar__button" type="button" class="btnEntrar">Entrar</button>
    </section>
  </main>
  <?php require_once('/workspaces/eComida/visao/compartilhado/rodape/rodape.php'); ?>
</body>
</html>