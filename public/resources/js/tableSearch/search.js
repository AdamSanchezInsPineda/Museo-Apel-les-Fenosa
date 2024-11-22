import {content} from "/resources/js/tableSearch/tables.js"
cont();
let found = "";

setInterval(() => {
    if (found !== document.getElementById('search').value){
        found = document.getElementById('search').value;
        cont(found);
    } 
}, 1000);
    
async function cont(found = "") {
    try {
       
        const response = await fetch(found === "" ? window.location.pathname + "/search" : window.location.pathname + "/search/" + found.normalize("NFD").replace(/[\u0300-\u036f]|-/g, "").replace(/ /g, "_"));
        const data = await response.json();
        
        await content(data).then(function(output){
            document.querySelector('.tbody').innerHTML = output;
        });
        

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