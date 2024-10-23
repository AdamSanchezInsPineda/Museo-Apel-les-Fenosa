import { pop } from '/resources/js/confirm.js';

cont();

document.getElementById('search').addEventListener('input', function() {
    const found = this.value;
    cont(found);
});
    
async function cont($found = "") {

    fetch($found == "" ? `/users/search` : `/users/search/` + $found )
    .then((res) => res.json())
    .then(response => {
        let output = "";
        response[0].forEach(function(usuario) {
            output += "<tr>";
            
            Object.entries(usuario).forEach(([key, value]) => {
                if (key !== "UsuarioID") {  
                    output += "<td>" + value + "</td>";     
                }
            });
            if (response[1] === 'admin') {  
                
                output += "<td>";
                output += "<a href='/users/" + usuario['UsuarioID'] + "'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                output += "<a href='/users/" + usuario['UsuarioID'] + "/delete' class='links' data-usuario='" + usuario['Nombre'] + "'><img src='resources/images/accions/delete.png' alt='Borrar'></a>";
                output += "</td>";
            }
        
            output += "</tr>";
        });

        
        document.querySelector('.tbody').innerHTML = output;

        pop();
    })
    .catch(error => console.log(error));
}