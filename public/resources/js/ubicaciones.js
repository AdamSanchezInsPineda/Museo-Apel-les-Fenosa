// Función para construir el árbol
function buildLocationTree(locations) {
    const tree = [];
    const lookup = {};

    // Primero crear un lookup object para acceso rápido
    locations.forEach(location => {
        lookup[location.id] = {
            id: location.id,
            name: location.Nombre,
            children: [],
            parent: location.UbicacionPadre
        };
    });

    // Construir el árbol
    locations.forEach(location => {
        if (location.UbicacionPadre === null) {
            // Es un nodo raíz
            tree.push(lookup[location.id]);
        } else {
            // Es un nodo hijo
            const parent = lookup[location.UbicacionPadre];
            if (parent) {
                parent.children.push(lookup[location.id]);
            }
        }
    });

    return tree;
}

// Función para renderizar el árbol
function renderTree(node, container, level = 0) {
    // Crear <ul> solo si estamos en un nivel mayor a 0
    const parentElement = level === 0 ? container : document.createElement('ul');

    node.forEach(item => {
        // Crear <li> para cada nodo
        const li = document.createElement('li');

        // Contenido del nodo
        const content = document.createElement('span');
        content.textContent = item.name;

        // Manejo de nodos con hijos
        if (item.children.length > 0) {
            // Botón de desplegable para expandir/colapsar
            const toggle = document.createElement('span');
            toggle.textContent = '▼';
            toggle.style.cursor = 'pointer';
            toggle.style.marginRight = '5px';
            
            // Evento para colapsar y expandir el ul
            toggle.onclick = function() {
                const childList = li.querySelector('ul');
                childList.style.display = childList.style.display === 'none' ? 'block' : 'none';
                toggle.textContent = childList.style.display === 'none' ? '▶' : '▼';
            };
            
            // Añadir el toggle antes del nombre
            content.prepend(toggle);
        }

        // Añadir el contenido actual al li
        li.appendChild(content);

        // Si el nodo tiene hijos, generar el sub-árbol recursivamente
        if (item.children.length > 0) {
            renderTree(item.children, li, level + 1);
        }

        // Añadir el li al elemento padre correspondiente
        parentElement.appendChild(li);
    });

    // Añadir el ul generado al contenedor principal solo en niveles mayores a 0
    if (level > 0) {
        container.appendChild(parentElement);
    }
}

// Uso:
fetch('/ubicacions/json') // Endpoint que devuelve las ubicaciones
    .then(response => response.json())
    .then(locations => {
        const tree = buildLocationTree(locations);
        const container = document.getElementById('tree-container');
        renderTree(tree, container);
    });