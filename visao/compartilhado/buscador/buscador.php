<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/visao/compartilhado/navegacao/navegacao.css">
    <link rel="stylesheet" href="/visao/compartilhado/menu/menu.css">
    <link rel="stylesheet" href="buscador.css">
    <title>Buscador</title>
</head>
<body>
    <?php require_once('/workspaces/eComida/visao/compartilhado/navegacao/navegacao.php'); ?>
    <section class="buscador-container">
        <input type="text" class="buscadorInput" name="buscadorInput" id="buscadorInput" placeholder="Digite o nome de um estabelecimento ou categoria">
        <section class="buscador__grupo">
            <h3 class="buscador__titulo">Estabelecimentos</h3>
            <a href="#" class="buscador__nome">Bobs</a>
            <a href="#" class="buscador__nome">Kikos</a>
            <a href="#" class="buscador__nome">Lenha</a>
        </section>
        <section class="buscador__grupo">
            <h3 class="buscador__titulo">Categorias</h3>
            <a href="#" class="buscador__nome">Salada</a>
            <a href="#" class="buscador__nome">Lanche</a>
            <a href="#" class="buscador__nome">Pizza</a>
        </section>
    </section>
    <?php require_once('/workspaces/eComida/visao/compartilhado/menu/menu.php'); ?>
    <script src="/visao/compartilhado/navegacao/navegacao.js"></script>
    <script src="/visao/compartilhado/menu/menu.js"></script>
</body>
</html>