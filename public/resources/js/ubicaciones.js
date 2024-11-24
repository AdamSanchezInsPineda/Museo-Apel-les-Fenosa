import { newUbicacion } from "/resources/js/modules/ubicaciones/new.js"
import {fetchTree} from "/resources/js/modules/ubicaciones/tree.js"

fetchTree();

const tree = document.getElementById("tree");

const btn = tree.querySelector("button");

btn.addEventListener("click", () => {
    newUbicacion();
});