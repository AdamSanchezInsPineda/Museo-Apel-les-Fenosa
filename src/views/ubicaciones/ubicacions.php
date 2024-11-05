<!-- vista.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Árbol de Ubicaciones</title>
    <style>
        .tree {
        --spacing: 1.5rem;
        --radius: 10px;
        }

        .tree li {
        display: block;
        position: relative;
        padding-left: calc(2 * var(--spacing) - var(--radius) - 2px);
        }

        .tree ul {
        margin-left: calc(var(--radius) - var(--spacing));
        padding-left: 0;
        }

        .tree ul li {
        border-left: 2px solid #ddd;
        }

        .tree ul li:last-child {
        border-color: transparent;
        }

        .tree ul li::before {
        content: '';
        display: block;
        position: absolute;
        top: calc(var(--spacing) / -2);
        left: -2px;
        width: calc(var(--spacing) + 2px);
        height: calc(var(--spacing) + 1px);
        border: solid #ddd;
        border-width: 0 0 2px 2px;
        }

        .tree summary {
        display: block;
        cursor: pointer;
        }

        .tree summary::marker,
        .tree summary::-webkit-details-marker {
        display: none;
        }

        .tree summary:focus {
        outline: none;
        }

        .tree summary:focus-visible {
        outline: 1px dotted #000;
        }

        .tree li::after,
        .tree summary::before {
        content: '';
        display: block;
        position: absolute;
        top: calc(var(--spacing) / 2 - var(--radius));
        left: calc(var(--spacing) - var(--radius) - 1px);
        width: calc(2 * var(--radius));
        height: calc(2 * var(--radius));
        border-radius: 50%;
        background: #ddd;
        }

        .tree summary::before {
        z-index: 1;
        background: #696 url('expand-collapse.svg') 0 0;
        }

        .tree details[open] > summary::before {
        background-position: calc(-2 * var(--radius)) 0;
        }
    </style>
</head>
<body>
    <?php require "resources/components/header.php" ?>

    <div id="tree-container"></div>

    <script>
        // Aquí va el código JavaScript que proporcioné anteriormente
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
fetch('/ubicacions/json') // Endpoint que devuelve las ubicaciones
    .then(response => response.json())
    .then(locations => {
        const tree = buildLocationTree(locations);
        const container = document.getElementById('tree-container');
        renderTree(tree, container);
    });
        // Añadir evento de selección
        function selectLocation(locationId) {
            // Aquí puedes añadir la lógica para cuando se selecciona una ubicación
            console.log('Ubicación seleccionada:', locationId);
        }
    </script>
</body>
</html>