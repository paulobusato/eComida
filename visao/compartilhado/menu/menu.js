var btnSacola = document.querySelector('#btnSacola');
var cabecalhoTitulo = document.querySelector('.cabecalho__titulo');
var cabecalhoDivider = document.querySelector('.cabecalho__divider');
var conteudoPrincipal = document.querySelector('.conteudo-principal');
var sacolaContainer = document.querySelector('.sacola-container');
var estabelecimentoLista = document.querySelector('.estabelecimento-list');

btnSacola.addEventListener('click', (e) => {
    cabecalhoTitulo ? cabecalhoTitulo.style.display = 'none' : '';
    cabecalhoDivider ? cabecalhoDivider.style.display = 'none' : '';
    conteudoPrincipal ? conteudoPrincipal.style.display = 'none' : '';
    estabelecimentoLista? estabelecimentoLista.style.display = 'none' : '';
    body.style.gridTemplateRows = '81px auto';
    body.style.gap = '0';
    sacolaContainer.classList.remove('display--none');
});