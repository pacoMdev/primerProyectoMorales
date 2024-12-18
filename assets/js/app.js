document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn = document.getElementById('openModalBtn');

    // Función para crear y mostrar el modal
    function creation_modal() {
        // Añadir atributos al botón de crear
        const btnCreate = document.getElementById("btnCreate");
        btnCreate.setAttribute("data-bs-toggle", "modal");
        btnCreate.setAttribute("data-bs-target", "#staticBackdrop");
    
        // Creación del modal
        const modal = document.createElement("div");
        modal.setAttribute("class", "modal fade");
        modal.setAttribute("id", "staticBackdrop");
        modal.setAttribute("data-bs-backdrop", "static");
        modal.setAttribute("data-bs-keyboard", "false");
        modal.setAttribute("tabindex", "-1");
        modal.setAttribute("aria-labelledby", "staticBackdropLabel");  // Corregir 'aria-labelleby' a 'aria-labelledby'
        modal.setAttribute("aria-hidden", "true");
    
        const modal_dialog = document.createElement("div");
        modal_dialog.setAttribute("class", "modal-dialog");
        const modal_content = document.createElement("div");
        modal_content.setAttribute("class", "modal-content");
    
        // Modal Header
        const modal_header = document.createElement("div");
        modal_header.setAttribute("class", "modal-header");  // Corregir 'modal-heade' a 'modal-header'
    
        const mod_header_h5 = document.createElement("h5");
        mod_header_h5.setAttribute("class", "modal-title");
        mod_header_h5.setAttribute("id", "staticBackdropLabel");  // Asegurarse de que el id es correcto
        mod_header_h5.textContent = "Añadir {table_name}";
    
        const mod_header_button = document.createElement("button");
        mod_header_button.setAttribute("type", "button");
        mod_header_button.setAttribute("class", "btn-close");
        mod_header_button.setAttribute("data-bs-dismiss", "modal");
        mod_header_button.setAttribute("aria-label", "close");
    
        modal_header.append(mod_header_h5);
        modal_header.append(mod_header_button);
    
        // Modal Body
        const modal_body = document.createElement("div");
        modal_body.setAttribute("class", "modal-body");
        modal_body.textContent = "Contenido del modal";  // Agregar contenido al cuerpo del modal
    
        // Modal Footer
        const modal_footer = document.createElement("div");
        modal_footer.setAttribute("class", "modal-footer");
    
        const mod_footer_button1 = document.createElement("button");
        mod_footer_button1.setAttribute("type", "button");
        mod_footer_button1.setAttribute("class", "btn btn-secondary");
        mod_footer_button1.setAttribute("data-bs-dismiss", "modal");
        mod_footer_button1.textContent = "Cerrar";
    
        const mod_footer_button2 = document.createElement("button");
        mod_footer_button2.setAttribute("type", "button");
        mod_footer_button2.setAttribute("class", "btn btn-primary");
        mod_footer_button2.textContent = "Añadir";
    
        // Agregar los botones al pie del modal
        modal_footer.append(mod_footer_button1);
        modal_footer.append(mod_footer_button2);
    
        // Añadir todo el contenido al modal
        modal_content.append(modal_header);
        modal_content.append(modal_body);
        modal_content.append(modal_footer);
    
        modal_dialog.append(modal_content);
    
        modal.append(modal_dialog);
    
        // Añadir el modal al contenedor en el HTML
        document.getElementById("container_data_admin").appendChild(modal);
    }
    

    // Crear el modal cuando el DOM esté listo
    createModal();
});
