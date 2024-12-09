export function pop() {
    const links = document.querySelectorAll('.links');
    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
        
            const user = this.getAttribute('data-usuario');
        
            const confirm = new Popup({
                id: "confirmation",
                title: "Delete Confirmation",
                content: `¿Estás seguro de que deseas borrar el usuario "${user}"? Esta acción no se puede deshacer.
                    big-margin§{btn-cancel}[Cancelar]{btn-accept}[Aceptar]`,
                sideMargin: "1.5em",    
                backgroundColor: "#FFF6E0",
                allowClose: false,
                titleColor: "#272829",
                textColor: "#272829",
                
                loadCallback: () => {
                    document.querySelector("button.cancel").onclick = () => {
                        confirm.hide();
                        window.location.href = "/users";
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
}