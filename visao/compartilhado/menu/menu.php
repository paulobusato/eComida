<nav class="menu">
    <button type="button" class="menu__link" id="btnIniciar"><i class="material-icons menu__icon">home</i></button>
    <button type="button" class="menu__link" id="btnBuscar"><i class="material-icons menu__icon">search</i></button>
    <button type="button" class="menu__link" id="btnSacola"><i class="material-icons menu__icon">shopping_basket</i></button>
</nav>
<script>
    const btnSacola = document.querySelector('#btnSacola');
    const cabecalhoTitulo = document.querySelector('.cabecalho__titulo');
    const cabecalhoDivider = document.querySelector('.cabecalho__divider');
    const conteudoPrincipal = document.querySelector('.conteudo-principal');
    const sacolaContainer = document.querySelector('.sacola-container');

    btnSacola.addEventListener('click', (e) => {
        cabecalhoTitulo ? cabecalhoTitulo.style.display = 'none' : '';
        cabecalhoDivider ? cabecalhoDivider.style.display = 'none' : '';
        conteudoPrincipal ? conteudoPrincipal.style.display = 'none' : '';
        sacolaContainer.classList.remove('display--none');
    });
</script>