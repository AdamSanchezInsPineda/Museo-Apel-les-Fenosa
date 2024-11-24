import { fetchTree } from "/resources/js/modules/ubicaciones/tree.js";
import { showUbicacion } from "/resources/js/modules/ubicaciones/show.js";

export async function editUbicacion(item) {
    try {
        const response = await fetch(`/ubicacions/${item.id}/edit`);
        const html = await response.text();
        
        const contenedor = document.getElementById('action');
        contenedor.innerHTML = html;

        const title = document.querySelector("h1");
        title.textContent += " " + item.name;

        const field = document.querySelector("input");
        field.setAttribute("value", item.name);

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

    formData.append("id", item.id);
    item.name = formData.get("Nombre");

    try{
        const response = await fetch(`/ubicacions/${item.id}`, {
            method: "POST",
            body: formData
        });

        if (!response.ok){
            throw new Error(`Response status: ${response.status}`);
        }

        fetchTree(item.id);
        showUbicacion(item);
        
    } catch(error){
        console.error(error.message);
    }
}