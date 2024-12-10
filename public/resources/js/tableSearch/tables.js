import {userActions} from '/resources/js/tableSearch/actions.js';

export async function content(data) {
        let output = "";
        
        for (const values of data) {
            output += "<tr>";
            
            Object.entries(values).forEach(([key, value]) => {
                if (key !== "UsuarioID" && key !== "Imagen" && key !== "ExposicionID" && key !== "ObjetoExposicionID" && key !== "ObjetoID") {  
                    output += "<td>" + value + "</td>";     
                }
                else if (key == "Imagen") {
                    output +="<td>";
                    output +="<img src='/resources/images/obras/" + value + ".jpg' alt='Foto de " + value + "' class='button1'>";
                    output +="<div class='img-preview'>";
                    output +="<button class='button2'>Salir</button>";
                    output +="<img src='/resources/images/obras/" + value + ".jpg' alt='Foto de " + value + "'>";
                    output +="</div>";
                    output +="</td>";
                };
            });
            
            
            let idAcciones;
            switch(window.location.pathname.split("/").slice(-1)[0]){
                case "users":
                    idAcciones = values['UsuarioID'];
                    break;

                case "registers":
                    idAcciones = values['RegistroNº'];
                    break;

                case "exposicions":
                    idAcciones = values['ExposicionID'];
                    break;

                case "bens":
                    idAcciones = values['ObjetoExposicionID'];
                    break; 
                
                case "add":
                    idAcciones = values['ObjetoID'];
                    break;
            }
            const ActionOutput = await userActions(idAcciones);
            output += ActionOutput ? ActionOutput : '';
            
            output += "</tr>";
                  
        };
        return (output);
}
