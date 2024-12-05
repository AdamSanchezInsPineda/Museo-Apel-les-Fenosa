import {obtenerRol} from '/resources/js/tableSearch/search.js'

export async function userActions(id){
    const rol = await obtenerRol();
    var output = "";
    switch(window.location.pathname.split("/").slice(-1)[0]){
        case "users":
            if (rol && rol === 'admin') {
                output += "<td>";
                output += "<a href='/users/" + id + "'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/users/" + id + "/delete' class='links'><img src='resources/images/accions/delete.png' alt='Borrar'></a>";
                output += "</td>";
            }
            break;
        case "registers":
            output += "<td>";
            output += "<a href='/registers/"  + id + "'><img src='resources/images/accions/eye.svg' alt='Ficha'></a>";
            if (rol && rol !== "convidat") {
                output += "<a href='/registers/"  + id + "/updateView'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/registers/" + id + "/delete'><img src='resources/images/accions/delete.png' alt='Ficha'></a>";
            }
            output += "</td>";
            break;
        case "exposicions":
            output += "<td>";
            output += "<a href='/exposicions/"  + id + "/bens'><img src='resources/images/accions/papel.png' alt='Ver Objeto de la exposición'></a>";
            if (rol && rol == "admin"){
                output += "<a href='/exposicions/"  + id + "'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/exposicions/"  + id + "/delete'><img src='resources/images/accions/delete.png' alt='Borrar'></a>"; 
            }
            output += "</td>";
            break;
        case "bens":
            if (rol && rol == "admin"){
                output += "<td>";
                output += "<a href='" + window.location.pathname + "/" + id + "/delete'><img src='/resources/images/accions/delete.png' alt='Borrar'></a>";
                output += "</td>";
            }
            break;
        case "add":
            output += "<td><input type='checkbox' name='afegir[]' value='"+ id +"'></td>";
            break;
    
    }
    return(output);
}
    