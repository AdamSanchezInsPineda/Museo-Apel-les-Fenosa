document.addEventListener('DOMContentLoaded',function(){

    console.log("Validación iniciada");
    document.getElementById('RegistroNº').addEventListener('keyup', function(){
        const errorMessage = document.getElementById('errorMessage');
        const registroValue = document.getElementById('RegistroNº').value.trim();
        const regex = /^[A-Za-z]?\d{5}$/; 
        if (!regex.test(registroValue)) {
            errorMessage.style.display = "block";
            document.getElementById('RegistroNº').focus();
        } else {
            errorMessage.style.display = "none";
        }
    });
    
});