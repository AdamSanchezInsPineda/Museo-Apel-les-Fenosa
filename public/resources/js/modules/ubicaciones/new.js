export function newUbicacion(id) {
fetch('/ubicacions/'+ id +'/new')
    .then(response => response.text())
    .then(html => {
        const contenedor = document.getElementById('new');
        contenedor.innerHTML = html;
    })
    .catch(error => console.error('Error al cargar la nueva ubicación:', error));
}