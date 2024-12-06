document.querySelector('.button-floating').addEventListener('click', event => {
    event.stopPropagation();
    let optionsWhatsapp = document.querySelector('.options-whatsapp ')
    optionsWhatsapp.style.display = 'flex'
    document.addEventListener('click', event => {
        if (event.target != optionsWhatsapp) {
            optionsWhatsapp.style.display = 'none'
            
        }
    })
})