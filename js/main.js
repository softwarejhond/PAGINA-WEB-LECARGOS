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
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top < window.innerHeight && rect.bottom >= 0
    );
}

function handleScroll() {
    const fadeDivs = document.querySelectorAll('.fade-div');
    fadeDivs.forEach(div => {
        if (isElementInViewport(div)) {
            div.classList.add('visible'); // Agrega la clase si está visible
        }
    });
}

// Detectar el evento scroll
window.addEventListener('scroll', handleScroll);

// Ejecutar una vez al cargar la página
handleScroll();

document.querySelectorAll('.image-container').forEach(container => {
    const image = container.querySelector('img');

    container.addEventListener('mousemove', (event) => {
        const rect = container.getBoundingClientRect();
        const offsetX = event.clientX - rect.left - rect.width / 2;
        const offsetY = event.clientY - rect.top - rect.height / 2;

        // Movimiento en dirección opuesta
        const moveX = -offsetX / 15;
        const moveY = -offsetY / 15;

        image.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });

    container.addEventListener('mouseleave', () => {
        image.style.transform = `translate(0, 0)`; // Vuelve a la posición original
    });
});