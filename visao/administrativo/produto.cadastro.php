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
    <link rel="stylesheet" href="produto.cadastro.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('/workspaces/eComida/visao/administrativo/compartilhado/cabecalho/cabecalho.php'); ?>
    <main class="conteudo-principal">
        <form action="#" class="formulario">
            <section class="formulario-produto">
                <h1>Produto</h1>
                <article class="formulario-produto__item">
                    <label for="formulario-produto__codigo">Código</label>
                    <input type="number" class="formulario-produto__codigo" id="formulario-produto__codigo" disabled>
                </article>
                <article class="formulario-produto__item">
                    <label for="formulario-produto__descricao">Descrição</label>
                    <input type="text" class="formulario-produto__descricao">
                </article>
                <article class="formulario-produto__item">    
                    <label for="formulario-produto__valor">Valor</label>
                    <input type="number" class="formulario-produto__valor">
                </article>
            </section>
            <section class="formulario-composicao">
                <h1>Composição</h1>
                <section class="composicao-info-wrapper">
                    <article class="formulario-composicao__item">
                        <label for="composicaoDescricao">Descrição</label>
                        <input type="text" class="formulario-composicao__descricao" id="composicaoDescricao">
                    </article>
                    <article class="formulario-composicao__item">
                        <label for="composicaoQuantidade">Quantidade Máxima</label>
                        <input type="number" class="formulario-composicao__quantidade" id="composicaoQuantidade">
                    </article>
                </section>
            </section>
        </form>
        <section class="preview">
            <section class="preview__section">
                <h5 class="preview__titulo">Escolha sua carne. Escolha 2 opção.</h5>
                <section class="preview__items">
                    <article class="preview__item">
                        <span class="preview-item__titulo">Lombo de porco</span>
                    </article>
                    <article class="preview__item">
                        <span class="preview-item__titulo">Linguiça de churrasco</span>
                    </article>
                    <article class="preview__item">
                        <span class="preview-item__titulo">Carne de boi</span>
                    </article>
                </section>
            </section>

            
            <section class="preview__section">
                <h5 class="preview__titulo">Escolha sua carne. Escolha 2 opção.</h5>
                <section class="preview__items">
                    <article class="preview__item">
                        <span class="preview-item__titulo">Lombo de porco</span>
                    </article>
                    <article class="preview__item">
                        <span class="preview-item__titulo">Linguiça de churrasco</span>
                    </article>
                    <article class="preview__item">
                        <span class="preview-item__titulo">Carne de boi</span>
                    </article>
                </section>
            </section>
            
            
            <section class="preview__section">
                <h5 class="preview__titulo">Escolha sua carne. Escolha 2 opção.</h5>
                <section class="preview__items">
                    <article class="preview__item">
                        <span class="preview-item__titulo">Lombo de porco</span>
                    </article>
                    <article class="preview__item">
                        <span class="preview-item__titulo">Linguiça de churrasco</span>
                    </article>
                    <article class="preview__item">
                        <span class="preview-item__titulo">Carne de boi</span>
                    </article>
                </section>
            </section>
        </section>
    </main>
    <?php require_once('/workspaces/eComida/visao/administrativo/compartilhado/rodape/rodape.php'); ?>
</body>
</html>