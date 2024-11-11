import {newUbicacion} from "/resources/js/modules/ubicaciones/new.js"

export function buildLocationTree(locations) {
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

    return tree;
}

export function renderTree(node, container) {
    node.forEach(item => {
        const li = document.createElement('li');

        const a = document.createElement('a');
        a.addEventListener("click", (event) => {
            event.preventDefault();

            newUbicacion(item.id);
        });
        
        if (item.children && item.children.length > 0) {
            const details = document.createElement('details');
            const summary = document.createElement('summary');
            a.textContent = item.name;
            summary.appendChild(a);
            details.appendChild(summary);

            renderTree(item.children, details);

            li.appendChild(details);
        } else {
            a.textContent = item.name;
            li.appendChild(a);
        }

        container.appendChild(li);
    });
}

export function fetchTree() {
    fetch('/ubicacions/json')
    .then(response => response.json())
    .then(locations => {
        const tree = buildLocationTree(locations);
        const container = document.getElementById('tree-container');
        renderTree(tree, container);
    });
}