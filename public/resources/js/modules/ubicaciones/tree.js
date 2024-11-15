import {showUbicacion} from "/resources/js/modules/ubicaciones/show.js"

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

            showUbicacion(item);
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

export function renderTreeNew(node, container, id, parentsToOpen = []) {
    node.forEach(item => {
        const li = document.createElement('li');

        const a = document.createElement('a');
        a.addEventListener("click", (event) => {
            event.preventDefault();
            showUbicacion(item);
        });

        if (item.children && item.children.length > 0) {
            const details = document.createElement('details');

            if (parentsToOpen.includes(item.id)) {
                details.open = true;
            }

            const summary = document.createElement('summary');
            a.textContent = item.name;
            summary.appendChild(a);
            details.appendChild(summary);

            renderTreeNew(item.children, details, id, parentsToOpen);

            li.appendChild(details);
        } else {
            a.textContent = item.name;
            li.appendChild(a);
        }

        container.appendChild(li);
    });
}


function findParentPath(tree, id) {
    const path = [];

    function traverse(node, targetId) {
        for (const item of node) {
            if (item.id === targetId) {
                path.push(item.id);
                return true;
            }
            if (item.children && traverse(item.children, targetId)) {
                path.push(item.id);
                return true;
            }
        }
        return false;
    }

    traverse(tree, id);
    return path.reverse();
}


export async function fetchTree(id = 0) {
    try {
        const response = await fetch('/ubicacions/json');
        const locations = await response.json();
        
        let tree = buildLocationTree(locations);
        tree = buildLocationTree(locations);
        const container = document.getElementById('tree-container');
        container.innerHTML = "";

        if (id !== 0){
            const array = findParentPath(tree, id);
            renderTreeNew(tree, container, id, array);
        } else {
            renderTree(tree, container);
        }
    } catch (error) {
        console.error('Error al cargar el árbol de ubicaciones:', error);
    }
}