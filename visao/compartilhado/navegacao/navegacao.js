var voltarIcon = document.querySelector('.voltar__icon');
    var sacolaContainer = document.querySelector('.sacola-container');
    
    
    voltarIcon.addEventListener('click', (e) => {
        // if (sacolaContainer sacolaContainer.classList.contains('display--none')) {
        //     sacolaContainer.classList.contains('display--none');
        // }    
        window.history.back();
    });