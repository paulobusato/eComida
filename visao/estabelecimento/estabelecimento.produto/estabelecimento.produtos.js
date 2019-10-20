const background = document.querySelector('#background');
const addButton = document.querySelectorAll('.destaque__icon');
const body = document.querySelector('body');
const pedido = document.querySelector('.pedido');
const sacolaButton = document.querySelector('.sacola-button');
const pedidoCloseButton = document.querySelector('.pedido_close');

const PedidoAddProduto = document.querySelector('.pedido__add-produto');
const PedidoRemoverProduto = document.querySelector('.pedido__remove-produto');
const PedidoQuantidadeProduto = document.querySelector('.quantidade__produto');

PedidoAddProduto.addEventListener('click', (e) => {
    PedidoQuantidadeProduto.textContent = parseInt(PedidoQuantidadeProduto.textContent) + 1;
});

PedidoRemoverProduto.addEventListener('click', (e) => {
    if (parseInt(PedidoQuantidadeProduto.textContent) > 0)
        PedidoQuantidadeProduto.textContent = parseInt(PedidoQuantidadeProduto.textContent) - 1;
});

addButton.forEach((button) => {
    button.addEventListener('click', (e) => {
    e.preventDefault();
    background.classList.add('background');
    background.classList.remove('display--none');
    body.classList.add('display--hidden');

    pedido.classList.remove('run-animation');
    void pedido.offsetWidth;
    pedido.classList.add('run-animation');
    }, false);
});

background.addEventListener('click', (e) => {
    if (e.target.id !== 'background') return;
    background.classList.remove('background');
    background.classList.add('display--none');
    body.classList.remove('display--hidden');
});

sacolaButton.addEventListener('click', e => {
    sacolaContainer.classList.toggle('display--none');
});

pedidoCloseButton.addEventListener('click', (e) => {
    e.preventDefault();
    background.classList.remove('background');
    background.classList.add('display--none');
    body.classList.remove('display--hidden');
});