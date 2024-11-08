function buildLocationTree(locations) {
    const tree = [];
    const lookup = {};

    locations.forEach(location => {
        lookup[location.id] = {
            id: location.id,
            name: location.Nombre,
            children: [],
            parent: location.UbicacionPadre
        };
    });
    locations.forEach(location => {
        if (location.UbicacionPadre === null) {
            tree.push(lookup[location.id]);
        } else {
            const parent = lookup[location.UbicacionPadre];
            if (parent) {
                parent.children.push(lookup[location.id]);
            }
        }
    });

    console.log(tree);

    return tree;
}

function renderTree(node, container) {
    node.forEach(item => {
        const li = document.createElement('li');
        
        if (item.children && item.children.length > 0) {
            // Crear <details> y <summary> para los nodos con hijos
            const details = document.createElement('details');
            const summary = document.createElement('summary');
            summary.textContent = item.name;
            details.appendChild(summary);

            // Recursivamente renderizar los hijos dentro del <details>
            renderTree(item.children, details);

            li.appendChild(details);
        } else {
            // Si no tiene hijos, simplemente renderizamos el nombre como <span>
            const span = document.createElement('span');
            span.textContent = item.name;
            li.appendChild(span);
        }

        container.appendChild(li);
    });
}


fetch('/ubicacions/json')
    .then(response => response.json())
    .then(locations => {
        const tree = buildLocationTree(locations);
        const container = document.getElementById('tree-container');
        renderTree(tree, container);
    });
        function selectLocation(locationId) {
            console.log('Ubicación seleccionada:', locationId);
        }