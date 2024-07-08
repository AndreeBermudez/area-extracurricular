// Menú desplegable
function manejarMenuDesplegable() {
    const hamburguesa = document.querySelector('.hamburger');
    hamburguesa.onclick = function() {
        const barraNavegacion = document.querySelector('.nav-bar');
        barraNavegacion.classList.toggle('active');
    }
}

// FAQ
function manejarDespliegueFAQ() {
    document.querySelectorAll('.FAQ-title').forEach((item) => {
        item.addEventListener('click', (event) => {
            const detalle = event.target.nextElementSibling;
            detalle.style.maxHeight = detalle.style.maxHeight ? null : '100%';
        });
    });
}

// Búsqueda
function manejarBusqueda() {
    const entradaBusqueda = document.querySelector('.search input');
    entradaBusqueda.addEventListener('input', function() {
        const valorBusqueda = this.value.toLowerCase();
        const elementosFAQ = document.querySelectorAll('.FAQ-wrapper');
        elementosFAQ.forEach(function(item) {
            const tituloFAQ = item.querySelector('.FAQ-title').textContent.toLowerCase();
            if (tituloFAQ.includes(valorBusqueda)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    });
}

// Filtrar usuarios
function filtrarUsuarios() {
    const entradaBusqueda = document.querySelector('#busquedaUsuario');
    entradaBusqueda.addEventListener('input', function() {
        console.log("Buscando: ", this.value);
        const valorBusqueda = this.value.toLowerCase();
        const filasUsuario = document.querySelectorAll('.filaUsuario');
        filasUsuario.forEach(function(fila) {
            const usuario = fila.cells[0].textContent.toLowerCase();
            if (usuario.includes(valorBusqueda)) {
                fila.style.display = '';
            } else {
                fila.style.display = 'none';
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    filtrarUsuarios();
    manejarMenuDesplegable();
    manejarDespliegueFAQ();
    manejarBusqueda();
});
