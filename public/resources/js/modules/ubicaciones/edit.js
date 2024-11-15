import { fetchTree } from "/resources/js/modules/ubicaciones/tree.js";
import { showUbicacion } from "/resources/js/modules/ubicaciones/show.js";

export async function editUbicacion(item) {
    try {
        const response = await fetch(`/ubicacions/${item.id}/edit`);
        const html = await response.text();
        
        const contenedor = document.getElementById('action');
        contenedor.innerHTML = html;

        const form = document.querySelector("form");
        form.addEventListener("submit", (event) => {
            event.preventDefault();
            updateUbicacion(item);
        });
    } catch (error) {
        console.error('Error al cargar la nueva ubicación:', error);
    }
}

async function updateUbicacion(item) {
    const form = document.querySelector("form");
    const formData = new FormData(form);

    formData.append("Ubicacion", item.id);

    try{
        const response = await fetch(`/ubicacions/${item.id}`, {
            method: "POST",
            body: formData
        });

        if (!response.ok){
            throw new Error(`Response status: ${response.status}`);
        }

        const newItem = {
            id: newId,
            name: formData.get("Nombre")
        };

        fetchTree(newId);
        showUbicacion(newItem);
        
    } catch(error){
        console.error(error.message);
    }
}