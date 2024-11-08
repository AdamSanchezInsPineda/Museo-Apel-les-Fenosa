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

        const a = document.createElement('button');
        a.textContent = "Añadir";
        a.addEventListener("click", newUbicacion);
        
        if (item.children && item.children.length > 0) {
            const details = document.createElement('details');
            const summary = document.createElement('summary');
            summary.textContent = item.name;
            details.appendChild(summary);
            summary.appendChild(a);

            renderTree(item.children, details);

            li.appendChild(details);
        } else {
            const span = document.createElement('span');
            span.textContent = item.name;
            li.appendChild(span);
            li.appendChild(a);
        }

        container.appendChild(li);
    });
}