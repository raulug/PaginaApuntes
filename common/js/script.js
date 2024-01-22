function toggleSidebar() {
    var container = document.querySelector('.contenedor_lenguajes');
    container.classList.toggle('open');
    var toggleBtn = document.querySelector('.toggle-btn');
    toggleBtn.classList.toggle('open');
}

function toggleIndice(icon) {
    // Encuentra el elemento li padre
    var parentLi = icon.closest('li');

    // Encuentra la lista de índice específica dentro del li actual
    var temaLista = parentLi.querySelector('.indice');

    // Abre o cierra el índice correspondiente
    if (temaLista) {
        temaLista.classList.toggle('open');

        // Encuentra el icono dentro del div
        var indiceBtn = parentLi.querySelector('.indice-btn');

        // Cambia el icono según el estado de la lista
        indiceBtn.classList.toggle('open', temaLista.classList.contains('open'));
    }
}








