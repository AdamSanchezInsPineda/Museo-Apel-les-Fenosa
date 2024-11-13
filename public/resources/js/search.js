import { pop } from '/resources/js/confirm.js';

async function obtenerRol() {
    try{
    const response = await fetch('/getrol');  
    const data = await response.json();
        if (data.rol) {
            const rol = data.rol;
            
            /*if (rol === 'admin') {
                console.log("El usuario es un administrador");
                // Mostrar contenido específico para admins
            } else if (rol === 'usuario') {
                console.log("El usuario es un usuario regular");
                // Mostrar contenido específico para usuarios
            } else {
                console.log("Rol no reconocido");
            }*/
           console.log(rol);
        } else {
            console.log("No se pudo obtener el rol o el usuario no está autenticado");
        }
    } catch (error) {
        console.log(error);
    }
}

cont();

document.getElementById('search').addEventListener('input', function() {
    const found = this.value;
    cont(found);
});
    
async function cont($found = "") {
    try {
        const response = await fetch($found === "" ? window.location.pathname + "/search" : window.location.pathname + "/search/" + $found);
        const data = await response.json();

        let output = "";
        data[0].forEach(function(usuario) {
            output += "<tr>";
            
            Object.entries(usuario).forEach(([key, value]) => {
                if (key !== "UsuarioID") {  
                    output += "<td>" + value + "</td>";     
                }
            });
            if (data[1] === 'admin') {  
                
                output += "<td>";
                output += "<a href='/users/" + usuario['UsuarioID'] + "'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/users/" + usuario['UsuarioID'] + "/delete' class='links' data-usuario='" + usuario['Nombre'] + "'><img src='resources/images/accions/delete.png' alt='Borrar'></a>";
                output += "</td>";
            }
        
            output += "</tr>";
        });

        document.querySelector('.tbody').innerHTML = output;

        pop();
    } catch (error) {
        console.log(error);
    }
}