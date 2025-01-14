document.addEventListener('DOMContentLoaded', function () {
    console.log("Validación iniciada");

    const registroInput = document.getElementById('RegistroNº');
    const errorMessage = document.getElementById('errorMessage');
    const formulario = document.querySelector('form'); // Selecciona el formulario

    // Función de validación
    function validarRegistro() {
        const registroValue = registroInput.value.trim();
        const regex = /^[A-Za-z]?\d{5}(\.\d{2})?$/;
        return regex.test(registroValue); // Devuelve true si es válido, false si no
    }

    // Validación en tiempo real (keyup)
    registroInput.addEventListener('keyup', function () {
        if (!validarRegistro()) {
            errorMessage.style.display = "block";
        } else {
            errorMessage.style.display = "none";
        }
    });

    // Validación al enviar el formulario
    formulario.addEventListener('submit', function (event) {
        if (!validarRegistro()) {
            event.preventDefault(); // Evita que el formulario se envíe
            errorMessage.style.display = "block"; // Muestra el mensaje de error
            registroInput.focus(); // Enfoca el campo para que el usuario lo corrija
            alert("Por favor, corrige el número de registro antes de continuar."); // Mensaje adicional
        }
    });
});