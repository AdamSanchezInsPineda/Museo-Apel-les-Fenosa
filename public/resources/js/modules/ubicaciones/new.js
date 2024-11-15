import { fetchTree } from "/resources/js/modules/ubicaciones/tree.js";
import { showUbicacion } from "/resources/js/modules/ubicaciones/show.js";

export async function newUbicacion(item) {
    try {
        const response = await fetch(`/ubicacions/${item.id}/new`);
        const html = await response.text();
        
        const contenedor = document.getElementById('action');
        contenedor.innerHTML = html;

        const form = document.querySelector("form");
        form.addEventListener("submit", (event) => {
            event.preventDefault();
            createUbicacion(item);
        });
    } catch (error) {
        console.error('Error al cargar la nueva ubicación:', error);
    }
}

async function createUbicacion(item = null) {
    const form = document.querySelector("form");
    const formData = new FormData(form);

    formData.append("Ubicacion", item.id);

    try{
        const response = await fetch("/ubicacions/new", {
            method: "POST",
            body: formData
        });

        if (!response.ok){
            throw new Error(`Response status: ${response.status}`);
        }

        const data = await response.json();
        const newId = parseInt(data.id);
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