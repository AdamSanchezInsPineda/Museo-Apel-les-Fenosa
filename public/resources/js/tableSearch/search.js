import {content} from "/resources/js/tableSearch/tables.js"
cont();

document.getElementById('search').addEventListener('input', function() {
    const found = this.value;
    cont(found);
});
    
async function cont($found = "") {
    try {
        const response = await fetch($found === "" ? window.location.pathname + "/search" : window.location.pathname + "/search/" + $found);
        const data = await response.json();


        let output = await content(data);
        document.querySelector('.tbody').innerHTML = output;

    } catch (error) {
        console.log(error);
    }
}

export async function obtenerRol() {
    try{
    const response = await fetch('/getrol');
    const data = await response.json();
    return(data.rol);
    } catch (error) {
        console.log(error);
        return false;
    }
}