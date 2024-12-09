function validateForm() {
    const checkboxes = document.querySelectorAll('input[name="afegir[]"]:checked');
    const errorMessage = document.getElementById('errorMessage');
    
    if (checkboxes.length === 0) {
        errorMessage.style.display = 'block';
        return false;
    }
    
    errorMessage.style.display = 'none';
    return true;
}