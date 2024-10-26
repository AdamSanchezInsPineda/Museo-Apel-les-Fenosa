// Función para construir el árbol
function buildLocationTree(locations) {
    const tree = [];
    const lookup = {};

    // Primero crear un lookup object para acceso rápido
    locations.forEach(location => {
        lookup[location.UbicacionID] = {
            id: location.UbicacionID,
            name: location.Nombre,
            children: [],
            parent: location.UbicacionPadre
        };
    });

    // Construir el árbol
    locations.forEach(location => {
        if (location.UbicacionPadre === null) {
            // Es un nodo raíz
            tree.push(lookup[location.UbicacionID]);
        } else {
            // Es un nodo hijo
            const parent = lookup[location.UbicacionPadre];
            if (parent) {
                parent.children.push(lookup[location.UbicacionID]);
            }
        }
    });

    return tree;
}

// Función para renderizar el árbol
function renderTree(node, container, level = 0) {
    const ul = document.createElement('ul');
    
    node.forEach(item => {
        const li = document.createElement('li');
        
        // Añadir sangría según el nivel
        li.style.marginLeft = `${level * 20}px`;
        
        // Crear el contenido del ítem
        const content = document.createElement('div');
        content.textContent = item.name;
        
        // Si tiene hijos, añadir un toggle
        if (item.children.length > 0) {
            const toggle = document.createElement('span');
            toggle.textContent = '▼';
            toggle.style.cursor = 'pointer';
            toggle.style.marginRight = '5px';
            
            toggle.onclick = function() {
                const childList = li.querySelector('ul');
                childList.style.display = childList.style.display === 'none' ? 'block' : 'none';
                toggle.textContent = childList.style.display === 'none' ? '▶' : '▼';
            };
            
            content.prepend(toggle);
        }
        
        li.appendChild(content);
        
        // Renderizar hijos recursivamente
        if (item.children.length > 0) {
            renderTree(item.children, li, level + 1);
        }
        
        ul.appendChild(li);
    });
    
    container.appendChild(ul);
}

// Uso:
fetch('/api/ubicaciones') // Endpoint que devuelve las ubicaciones
    .then(response => response.json())
    .then(locations => {
        const tree = buildLocationTree(locations);
        const container = document.getElementById('tree-container');
        renderTree(tree, container);
    });