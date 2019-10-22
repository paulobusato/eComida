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
    <link rel="stylesheet" href="sacola.css">
    <title>Sacola</title>
</head>
<body>
    <?php require_once('/workspaces/eComida/visao/compartilhado/navegacao/navegacao.php'); ?>
    <section class="sacola-container display--none">
        <p class="sacola__texto">Seu pedido em</p>
        <h3 class="sacola__estabelecimento">Number One Chicken</h3>
        <hr class="sacola__divider">
        <section class="sacola-pedidos">
            <article class="sacola-pedido">
                <p class="sacola-pedido__descricao"><span>1</span>x Combo p - <span>indicamos para 1 a 2 pessoas</span></p>
                <p class="sacola-pedido__ingredientes">
                <span>1x Tiras de filé de coxa e sobrecoxa</span>,
                <span>1x Arroz branco g</span>,
                <span>1x Maionese verde</span>
                </p>
                <p class="sacola-pedido__preco">R$ 32,99</p>
                <nav class="sacola-pedido__actions">
                <button class="sacola-pedido__editar"><i class="material-icons">edit</i></button>
                <button class="sacola-pedido__remover"><i class="material-icons">remove_circle_outline</i></button>
                </nav>
            </article>
            <hr class="sacola__divider">
            <article class="sacola-pedido">
                <p class="sacola-pedido__descricao"><span>1</span>x Combo p - <span>indicamos para 1 a 2 pessoas</span></p>
                <p class="sacola-pedido__ingredientes">
                <span>1x Tiras de filé de coxa e sobrecoxa</span>,
                <span>1x Arroz branco g</span>,
                <span>1x Maionese verde</span>
                </p>
                <p class="sacola-pedido__preco">R$ 32,99</p>
                <nav class="sacola-pedido__actions">
                <button class="sacola-pedido__editar"><i class="material-icons">edit</i></button>
                <button class="sacola-pedido__remover"><i class="material-icons">remove_circle_outline</i></button>
                </nav>
            </article>
        </section>
        <section class="sacola_acoes">
            <button class="sacola-btn sacola-btn--confirmar">Confirmar</button>
        </section>
    </section>
    <?php require_once('/workspaces/eComida/visao/compartilhado/menu/menu.php'); ?>
    <script src="/visao/compartilhado/navegacao/navegacao.js"></script>
    <script src="/visao/compartilhado/menu/menu.js"></script>
</body>
</html>