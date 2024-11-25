import {obtenerRol} from '/resources/js/tableSearch/search.js'

export async function userActions(id){
    const rol = await obtenerRol();
    var output = "";
    
    switch(window.location.pathname){
        case "/users":
            if (rol && rol === 'admin') {
                var output = "";
                output += "<a href='/users/" + id + "'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/users/" + id + "/delete' class='links'><img src='resources/images/accions/delete.png' alt='Borrar'></a>";
            }
        break;
        case "/registers":
            output += "<a href='/registers/"  + id + "'><img src='resources/images/accions/eye.svg' alt='Ficha'></a>";
            if (rol && rol !== "convidat") {
                output += "<a href='/registers/"  + id + "/updateView'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/registers/" + id + "/delete'><img src='resources/images/accions/delete.png' alt='Ficha'></a>";
                
            }
        break;
        case "/exposicions":
            output += "<a href='/exposicions/"  + id + "/bens'><img src='resources/images/accions/eye.svg' alt='Ficha'></a>";
            if (rol && rol == "admin"){
                output += "<a href='/exposicions/"  + id + "'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/exposicions/"  + id + "/delete'><img src='resources/images/accions/delete.png' alt='Borrar'></a>"; 
            }
        break;
        case "/exposicions/8/bens":
    }
    return(output);
}
    