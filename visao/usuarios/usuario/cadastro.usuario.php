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
  <link rel="stylesheet" href="cadastro.usuario.css">
  <title>Login - eComida</title>
</head>
<body>
    <?php require_once('/workspaces/eComida/visao/compartilhado/cabecalho/cabecalho.php'); ?>
    <form action="" class="cadastro-formulario">
        <h2>Cadastro</h2>
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
            <button type="button" class="btnCancelar">Cancelar</button>
            <button type="button" class="btnConfirmar">Confirmar</button>
        </section>
    </form>
  <?php require_once('/workspaces/eComida/visao/compartilhado/rodape/rodape.php'); ?>
</body>
</html>