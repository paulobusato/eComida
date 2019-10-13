<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="produto.cadastro.css">
    <title>Document</title>
</head>
<body>
    <header class="cabecalho">
        <a class="cabecalho__logo" href="#">eComida</a>
    </header>
    <aside class="navegacao-container">
        <nav class="navegacao">
            <a href="pedido.lista.php" class="navegacao__item">Pedidos</a>
            <a href="produto.cadastro.php" class="navegacao__item">Produtos</a>
            <a href="estabelecimento.cadastro.php" class="navegacao__item">Estabelecimento</a>
        </nav>
    </aside>
    <main class="conteudo-principal">
        <h1 class="conteudo-principal__titulo">Cadastro de Produto</h1>
        <hr class="conteudo-principal__divider">
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
                <article class="formulario-composicao__item">
                    <label for="composicaoDescricao">Descrição</label>
                    <input type="text" class="formulario-composicao__descricao" id="composicaoDescricao">
                </article>
                <article class="formulario-composicao__item">
                    <label for="composicaoQuantidade">Quantidade Máxima</label>
                    <input type="number" class="formulario-composicao__quantidade" id="composicaoQuantidade">
                </article>
                <section class="formulario-composicao__opcoes">
                    <h3 class="opcoes__titulo">Opções</h3>
                    <article class="opcoes__item opcoes__descricao--wrapper">
                        <label>Descrição</label>
                        <input type="text" class="opcoes__descricao">
                    </article>
                    <article class="opcoes__item opcoes__valor--wrapper">
                        <label>Valor</label>
                        <input type="number" class="opcoes__valor">
                    </article>
                </section>
            </section>
            <div class="composicao-divider-wrapper">
                <hr class="composicao__divider">
            </div>
            <section class="composicao__itens">
                <article class="composicao__item">
                    <span class="composicao__descricao">Descrição</span>
                    <span class="composicao__valor">Valor</span>
                    <span class="composicao__btn-excluir">Excluir</span>
                </article>
                <article class="composicao__item">
                    <span class="composicao__descricao">Morango</span>
                    <span class="composicao__valor">R$ 20.30</span>
                    <i class="material-icons composicao__btn-excluir">clear</i>
                </article>
                <article class="composicao__item">
                    <span class="composicao__descricao">Chocolate</span>
                    <span class="composicao__valor">R$ 7.30</span>
                    <i class="material-icons composicao__btn-excluir">clear</i>
                </article>
            </section>
        </form>
    </main>
    <footer class="rodape">
        <span class="copyright">2019 &copy; Todos os direitos reservados</span>
        <span>Buzato Tecnologia</span>
    </footer>
</body>
</html>