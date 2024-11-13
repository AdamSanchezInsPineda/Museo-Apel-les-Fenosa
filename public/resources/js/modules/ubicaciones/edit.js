export async function editUbicacion(id) {
    try {
        const response = await fetch(`/ubicacions/${id}/new`);
        const html = await response.text();
        
        const contenedor = document.getElementById('action');
        contenedor.innerHTML = html;
    } catch (error) {
        console.error('Error al cargar la nueva ubicación:', error);
    }
}
