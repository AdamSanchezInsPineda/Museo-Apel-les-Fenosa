import {newUbicacion} from "/resources/js/modules/ubicaciones/new.js"
import {editUbicacion} from "/resources/js/modules/ubicaciones/edit.js"
import {destroyUbicacion} from "/resources/js/modules/ubicaciones/destroy.js"

export async function showUbicacion(item) {
    try {
        const response = await fetch(`/ubicacions/${item.id}`);
        const html = await response.text();
        
        const contenedor = document.getElementById('action');
        contenedor.innerHTML = html;
        const h1 = document.querySelector('h1');
        h1.textContent = item.name;
        const btns = contenedor.querySelectorAll('button');
        btns.forEach((btn, i) => {
            if (i === 0) {
                btn.addEventListener('click', () => newUbicacion(item));
            } else if (i === 1) {
                btn.addEventListener('click', () => editUbicacion(item));
            } else if (i === 2) {
                btn.addEventListener('click', () => destroyUbicacion(item));
            }
        })

    } catch (error) {
        console.error('Error al cargar la ubicación:', error);
    }
}

export function hideUbicacion(){
    const contenedor = document.getElementById('action');
    contenedor.innerHTML = "";
}