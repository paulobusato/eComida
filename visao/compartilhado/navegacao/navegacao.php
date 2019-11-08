<?php
$nomeCliente = preg_split("/ /", $_SESSION["nomeCliente"])[0];
?>

<nav class="cabecalho__navegacao">
    <i class="material-icons voltar__icon">keyboard_arrow_left</i>
    <a class="cabecalho__logo" href="/index.php">eComida</a>
    <i class="material-icons login__icon">account_circle</i>
    <p class="login-text">Olá, <?= $nomeCliente ?></p>
    <button class="sacola-button">
        <i class="material-icons sacola-button__icon">shopping_cart</i>
    </button>
</nav>