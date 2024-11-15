import { pop } from '/resources/js/confirm.js';
import {userActions} from '/resources/js/tableSearch/actions.js';

export async function content(data) {
        let output = "";
        
        for (const values of data) {
            output += "<tr>";
            
            Object.entries(values).forEach(([key, value]) => {
                if (key !== "UsuarioID") {  
                    output += "<td>" + value + "</td>";     
                }
            });
            
            output += "<td>";
            
            const ActionOutput = await userActions(values['UsuarioID']);
            output += ActionOutput ? ActionOutput : '';

            output += "</td>";
            output += "</tr>";
                  
        };
        pop();
        
        return (output);
}
/*

foreach ($registros as $registro) {
    echo "<tr>";
    foreach ($registro as $key => $dato) {
        if ($key == "Imagen") {
            echo "<td>";
            echo "<img src='resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}' class='button1'>";
            echo "<div class='img-preview'>";
            echo "<button class='button2'>Salir</button>";
            echo "<img src='resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}'>";
            echo "</div>";
            echo "</td>";
        } else {
            echo "<td>{$dato}</td>";
        }
    }

    echo "<td>";
    echo "<a href='/registers/{$registro['RegistroNº']}'><img src='resources/images/accions/eye.svg' alt='Ficha'></a>";
    if ($_SESSION['rol'] != "convidat") {
        echo "<a href='/registers/{$registro['RegistroNº']}/updateView'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
        echo "<a href='/registers/{$registro['RegistroNº']}/delete'><img src='resources/images/accions/delete.png' alt='Ficha'></a>";
    }
    echo "</td>";
    echo "</tr>";
}*/