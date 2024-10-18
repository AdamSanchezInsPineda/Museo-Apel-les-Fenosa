const links = document.querySelectorAll('.links');

links.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        
        user = this.getAttribute('data-usuario');
        
        confirm = new Popup({
            id: "confirmation",     
            title: "Delete Confirmation",
            content: `¿Estás seguro de que deseas borrar el usuario ${user}? Esta acción no se puede deshacer.custom-space-out big-margin§{btn-cancel}[Cancelar]{btn-accept}[Aceptar]`,
            sideMargin: "1.5em",
            fontSizeMultiplier: "1.2",
            backgroundColor: "#FFFEE3",
            allowClose: false,
            css: `
            .popup.override .custom-space-out {
                display: flex;
                justify-content: center;
                gap: 1.5em;
            }`,
                
            loadCallback: () => {
                document.querySelector("button.cancel").onclick = () => {
                    confirm.hide();
                };

                document.querySelector("button.accept").onclick = () => {
                    confirm.hide();
                    window.location.href = this.href;
                };
            },
        });
        
        confirm.show();
    });
});
