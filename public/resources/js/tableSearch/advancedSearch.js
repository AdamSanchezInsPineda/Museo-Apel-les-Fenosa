var modal = document.getElementById("buscadorAvanzado");

document.getElementById("mostrarBuscador").onclick = function() {
  modal.style.display = "block";
}

document.getElementsByClassName("close")[0].onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

document.getElementById('addFilter').addEventListener('click', function() {
    const campo = document.getElementById('campo').value;

    if (campo) {
        document.getElementById('filters-container').innerHTML +=     `<tr class="filter">
                                                                        <td><span>${campo}: </span></td>
                                                                        <td><input type="text" name="${campo}" placeholder="Condición"></td>
                                                                        <td><button type="button" class="removeFilter">Eliminar</button></td>
                                                                      </tr>`;
        
        for (let filterClose of document.getElementsByClassName('removeFilter')){
          filterClose.addEventListener('click', function() {
            filterClose.closest(".filter").remove();
          })
        };
    }; 
});

document.getElementById('advancedSearch').addEventListener('submit', async function(event) {
    console.log("holas")
    event.preventDefault();
    
    const filters = Array.from(document.querySelectorAll('.filter'));
    const criteria = {};

    filters.forEach(filter => {
        const fieldName = filter.querySelector('input').name;
        const fieldValue = filter.querySelector('input').value;

        if (!criteria[fieldName]) {
            criteria[fieldName] = [];
        }
        criteria[fieldName].push(fieldValue);
    });

    const response = await fetch('/registers/advancedSearch', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ criteria })
    });

    const data = await response.json();
    console.log(data); // Manejar los resultados de la búsqueda
});