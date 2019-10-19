var voltarIcon = document.querySelector('.voltar__icon');
var sacolaContainer = document.querySelector('.sacola-container');


voltarIcon.addEventListener('click', (e) => {
    if (sacolaContainer && !sacolaContainer.classList.contains('display--none')) {
        cabecalhoTitulo ? cabecalhoTitulo.style.display = 'block' : '';
        cabecalhoDivider ? cabecalhoDivider.style.display = 'block' : '';
        conteudoPrincipal ? conteudoPrincipal.style.display = 'block' : '';
        estabelecimentoLista? estabelecimentoLista.style.display = 'block' : '';
        body.style.gridTemplateRows = '30% auto 5%';
        sacolaContainer.classList.add('display--none');
    } else {
        window.history.back();
    }
});