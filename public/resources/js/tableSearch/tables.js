import { pop } from '/resources/js/confirm.js';
    
export function content(data) {
        let output = "";
        data.forEach(function(values) {
            output += "<tr>";
            
            Object.entries(values).forEach(([key, value]) => {
                if (key !== "UsuarioID") {  
                    output += "<td>" + value + "</td>";     
                }
            });
            output += "<td class='actions'>";
            output += "</td>";
            output += "</tr>";
        });

        pop();
        return (output);
}
