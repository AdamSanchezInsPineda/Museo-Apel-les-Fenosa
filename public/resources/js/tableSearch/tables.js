import {userActions} from '/resources/js/tableSearch/actions.js';

export async function content(data) {
        let output = "";
        
        for (const values of data) {
            output += "<tr>";
            
            Object.entries(values).forEach(([key, value]) => {
                if (key !== "UsuarioID" && key !== "Imagen" && key !== "ExposicionID") {  
                    output += "<td>" + value + "</td>";     
                }
                else if (key == "Imagen") {
                    output +="<td>";
                    output +="<img src='resources/images/obras/" + value + ".jpg' alt='Foto de " + value + "' class='button1'>";
                    output +="<div class='img-preview'>";
                    output +="<button class='button2'>Salir</button>";
                    output +="<img src='resources/images/obras/" + value + ".jpg' alt='Foto de " + value + "'>";
                    output +="</div>";
                    output +="</td>";
                };
            });
            
            output += "<td>";
            let idAcciones;
            switch(window.location.pathname){
                case "/users":
                    idAcciones = values['UsuarioID'];
                break;
                case "/registers":
                    idAcciones = values['RegistroNº'];
                break;
                case "/exposicions":
                    idAcciones = values['ExposicionID'];

                    
            }
            const ActionOutput = await userActions(idAcciones);
            output += ActionOutput ? ActionOutput : '';
            
            output += "</td>";
            output += "</tr>";
                  
        };
        return (output);
}
