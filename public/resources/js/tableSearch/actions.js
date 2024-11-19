import {obtenerRol} from '/resources/js/tableSearch/search.js'

export async function userActions(usuarioID){
    const rol = await obtenerRol(usuarioID);

    
    if (rol && rol === 'admin') {
        var output = "";
        output += "<a href='/users/" + usuarioID + "'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
        output += "<a href='/users/" + usuarioID + "/delete' class='links'><img src='resources/images/accions/delete.png' alt='Borrar'></a>";
        return(output);
    } else {
        return false;
    }
}