document.addEventListener('DOMContentLoaded', () => {
    const createButton = document.getElementById('createBackup');
    const backupInput = document.getElementById('nameBackup');

    createButton.addEventListener('click', (event) => {
        event.preventDefault(); 

        const backupName = backupInput.value.trim(); 

        if (!backupName) {
            alert('Por favor, ingresa un nombre para la copia de seguridad.');
            return;
        }

        // Realizar la solicitud POST
        fetch(`/backup/${encodeURIComponent(backupName)}/create`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest', 
                'Content-Type': 'application/json', 
            },
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Error al crear el backup');
                }
                return response.json(); 
            })
            .then(() => {
                window.location.reload();

            })
            .catch((error) => {
                alert('Hubo un problema al crear el backup.');
            });
    });
});

document.querySelectorAll('.deleteBackup').forEach(button => {
    button.addEventListener('click', async (event) => {
        event.preventDefault();
        const backupName = button.dataset.backup;

    console.log(`/backup/${encodeURIComponent(backupName)}/delete`)
        fetch(`/backup/delete`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
            },
            body: JSON.stringify({ backup: backupName })
        })
        .then((response) => {
            if (!response.ok) {
                throw new Error('Error al crear el backup');
            }
            return response.json(); 
        })
        .then(() => {
            window.location.reload();
        })
        .catch((error) => {
            alert('Hubo un problema al crear el backup.');
        });
    });
});




document.querySelectorAll('.importBackup').forEach(button => {
    button.addEventListener('click', async (event) => {
        event.preventDefault();
        const backupName = button.dataset.backup;

        fetch(`/backup/import`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
            },
            body: JSON.stringify({ backup: backupName }),
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error(`Error al importar el backup: ${response.statusText}`);
                }
                return response.json();
            })
            .then(() => {
                window.location.reload();
            })
            .catch((error) => {
                alert(`Hubo un problema al importar el backup: ${error.message}`);
            });
    });
});
