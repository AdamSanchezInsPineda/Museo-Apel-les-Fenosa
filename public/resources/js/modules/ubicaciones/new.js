export async function newUbicacion(item) {
    try {
        const response = await fetch(`/ubicacions/${item.id}/new`);
        const html = await response.text();
        
        const contenedor = document.getElementById('action');
        contenedor.innerHTML = html;
        createUbicacion(item);
    } catch (error) {
        console.error('Error al cargar la nueva ubicación:', error);
    }
}

async function createUbicacion(item){
    document.querySelector("form").addEventListener('submit', async function (event) {
        event.preventDefault();
    
        const formData = new FormData(this);
        formData.append("Ubicacion", item.id);
    
        try {
            const response = await fetch(`/ubicacions/${item.id}/new`, {
                method: 'POST',
                body: formData
            });
    
            if (!response.ok) {
                throw new Error('Error en la solicitud');
            }
    
            console.log('Ubicación creada con éxito');

            fetchTree();
    
        } catch (error) {
            console.error('Error al enviar el formulario:', error);
        }
    });
}