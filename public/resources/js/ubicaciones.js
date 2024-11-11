import {buildLocationTree, renderTree} from "/resources/js/modules/ubicaciones/tree.js"

import {newUbicacion} from "/resources/js/modules/ubicaciones/new.js"


fetch('/ubicacions/json') // Endpoint que devuelve las ubicaciones
    .then(response => response.json())
    .then(locations => {
        const tree = buildLocationTree(locations);
        const container = document.getElementById('tree-container');
        renderTree(tree, container);
    });