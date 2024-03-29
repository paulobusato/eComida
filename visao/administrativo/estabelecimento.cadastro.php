<?php
    require_once("/workspaces/eComida/controle/EstabelecimentoAction.php");
    session_start();
    
    $estabelecimento = $_SESSION["estabelecimento"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="compartilhado/cabecalho/cabecalho.css">
    <link rel="stylesheet" href="compartilhado/rodape/rodape.css">
    <link rel="stylesheet" href="estabelecimento.cadastro.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('/workspaces/eComida/visao/administrativo/compartilhado/cabecalho/cabecalho.php'); ?>
    <main class="conteudo-principal">
        <h1 class="conteudo-principal__titulo">Estabelecimento</h1>
        <hr class="conteudo-principal__divider">
        <form action="../../controle/EstabelecimentoAction.php" method="POST" class="formulario">
            <section class="formulario__section formulario__section--cadastro">
                <article class="formulario__item">
                    <label for="nomeFantasia">Nome Fantasia</label>
                    <input type="text" class="formulario__input" id="nomeFantasia" name="nomeFantasia" value="<?= $estabelecimento->getNomeFantasia() ?>">
                </article>
                <article class="formulario__item">
                    <label for="descricao">Razão Social</label>
                    <input type="text" class="formulario__input" id="razaoSocial" name="razaoSocial" value="<?= $estabelecimento->getRazaoSocial() ?>">
                </article>
                <article class="formulario__item">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" class="formulario__input" id="cnpj" name="cnpj" value="<?= $estabelecimento->getCNPJ() ?>">
                </article>
                <article class="formulario__item">
                    <label for="cnpj">Telefone</label>
                    <input type="text" class="formulario__input" id="telefone" name="telefone" value="<?= $estabelecimento->getTelefone() ?>">
                </article>
                <article class="formulario__item">
                    <label for="cnpj">Email</label>
                    <input type="text" class="formulario__input" id="email" name="email" value="<?= $estabelecimento->getEmail() ?>">
                </article>
            </section>
            <section class="formulario__section formulario__section--endereco">
                <article class="formulario__item">
                    <label for="cep">CEP</label>
                    <input type="text" class="formulario__input" id="cep" name="cep" value="<?= $estabelecimento->getCEP() ?>">
                </article>
                <article class="formulario__item">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" class="formulario__input" id="logradouro" name="logradouro" value="<?= $estabelecimento->getLogradouro() ?>">
                </article>
                <article class="formulario__item">
                    <label for="numero">Numero</label>
                    <input type="text" class="formulario__input" id="numero" name="numero" value="<?= $estabelecimento->getNumero() ?>">
                </article>
                <article class="formulario__item">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="formulario__input" id="bairro" name="bairro" value="<?= $estabelecimento->getBairro() ?>">
                </article>
                <article class="formulario__item">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="formulario__input" id="cidade" name="cidade" value="<?= $estabelecimento->getCidade() ?>">
                </article>
                <article class="formulario__item">
                    <label for="cidade">UF</label>
                    <input type="text" class="formulario__input" id="uf" name="uf" value="<?= $estabelecimento->getUF() ?>">
                </article>
            </section>
            <nav class="formulario_actions">
                <button type="submit" name="btnExcluir" class="btn-action action__excluir">Excluir</button>
                <button type="submit" name="btnSalvar" class="btn-action action__salvar">Salvar</button>
            </nav>
        </form>
    </main>
    <?php require_once('/workspaces/eComida/visao/administrativo/compartilhado/rodape/rodape.php'); ?>
</body>
</html>