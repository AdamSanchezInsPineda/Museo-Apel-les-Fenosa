function validateForm() {
    const checkboxes = document.querySelectorAll('input[name="afegir[]"]:checked');
    const registroInput = document.getElementById('RegistroNº');
    const errorMessage = document.getElementById('errorMessage');
    const registroValue = registroInput.value.trim();
    
    // Expresión regular para validar el formato del número de registro
    const regex = /^[A-Za-z]?\d{5}$/; // Opcionalmente una letra seguida de 5 dígitos

    if (!regex.test(registroValue)) {
        errorMessage.style.display = 'block';
        errorMessage.textContent = 'El número de registro debe ser 5 dígitos y puede tener una letra al principio.';
        return false;
    }
    
    if (checkboxes.length === 0) {
        errorMessage.style.display = 'block';
        return false;
    }
    
    errorMessage.style.display = 'none';
    return true;
}