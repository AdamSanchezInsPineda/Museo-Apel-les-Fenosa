import {fetchTree} from "/resources/js/modules/ubicaciones/tree.js"

export async function destroyUbicacion(item) {
    try {
        const response = await fetch(`/ubicacions/${item.id}/delete`, {method: 'POST'});

        if (!response.ok) {
            throw new Error('Error al eliminar la ubicación');
        }

        console.log('Ubicación eliminada con éxito');

        fetchTree();

    } catch (error) {
        console.error('Error al cargar la nueva ubicación:', error);
    }
}
