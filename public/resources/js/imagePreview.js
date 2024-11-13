document.addEventListener('DOMContentLoaded', function() {
    const buttons1 = document.querySelectorAll(".button1");
    const buttons2 = document.querySelectorAll(".button2");
    
    buttons1.forEach(button => {
        button.addEventListener("click", function() {
            const preview = this.nextElementSibling;
            preview.classList.add("active");
        });
    });

    buttons2.forEach(button => {
        button.addEventListener("click", function() {
            const preview = this.closest('.img-preview');
            preview.classList.remove("active");
            
        });
    });
});

