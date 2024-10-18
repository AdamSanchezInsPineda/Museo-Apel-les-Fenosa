// Obtener todos los enlaces con la clase 'delete-link'
const deleteLink = document.querySelectorAll('.delete-link');

// Iterar sobre cada enlace para agregar el evento de confirmación
deleteLink.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Evita que el enlace se siga automáticamente

        // Mostrar la confirmación al usuario
        const name = this.getAttribute('data-usuario');
        const confirmacion = confirm(`¿Estás seguro de que deseas borrar el usuario ${name}? Esta acción no se puede deshacer.`);

        // Si el usuario confirma, redirige al enlace de borrado
        if (confirmacion) {
            window.location.href = this.href; // Redirige a la URL del enlace (borrado del usuario)
        }
    });
});
