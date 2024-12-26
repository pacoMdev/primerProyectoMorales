const tableData = [
    { id: 1, name: "Alice", age: 25 },
    { id: 2, name: "Bob", age: 30 },
    { id: 3, name: "Charlie", age: 35 },
];
const header_pedido = ["pedido_id", "user_id", "discount_id"]

function creation_filter(){
    const list_tables = ["pedido", "user", "ingredient", "category", "product", "promotion"]
    const general_div = document.createElement("div")
    general_div.setAttribute("class", "container w-100")
    list_tables.forEach(table => {
        const div_table = document.createElement("button")
        div_table.textContent = table
        div_table.setAttribute("id", "filter_"+table)
        div_table.setAttribute("class", "col-12 col-lg-8 w-auto")
        general_div.append(div_table);
    });
    general_div.setAttribute("class", "d-flex gap-3")
    document.getElementById("container_data_admin").appendChild(general_div)

}
function creation_search_line(){

    // <form class="d-flex" role="search">
    //     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    //     <button class="btn btn-outline-success" type="submit">Search</button>
    // </form>

    // contenedor de search
    const input_search_gen = document.createElement("div")
    input_search_gen.setAttribute("class", "d-flex w-50")
    input_search_gen.setAttribute("role", "search")
    // input de buscar
    const button_search = document.createElement("input")
    button_search.setAttribute("class", "form-control me-2")
    button_search.setAttribute("type", "search")
    button_search.setAttribute("placeholder", "Search")
    button_search.setAttribute("aria-label", "Search")
    button_search.textContent="Search"
    // button search
    const input_search = document.createElement("button")
    input_search.setAttribute("class", "btn btn-outline-success")
    input_search.setAttribute("type", "success")
    input_search.setAttribute("placeholder", "Search")
    input_search.setAttribute("aria-label", "Search")



    input_search_gen.append(button_search)
    input_search_gen.append(input_search)
    document.getElementById("container_data_admin").appendChild(input_search_gen)
}
// Crear una tabla
function createTable(data) {
    // Crear elementos principales
    const table = document.createElement("table");
    const thead = document.createElement("thead");
    const tbody = document.createElement("tbody");

    // Crear encabezados de la tabla
    const headers = ["BOX", "ID", "Name", "Age", "ESTADO"];
    const trHead = document.createElement("tr");
    headers.forEach(header => {
        const th = document.createElement("th");
        th.textContent = header;
        trHead.appendChild(th);
    });
    thead.appendChild(trHead);

    // Crear filas de la tabla
    data.forEach(item => {
        const tr = document.createElement("tr");
        const td_check = document.createElement("td")
        const input_check = document.createElement("input")
        input_check.setAttribute("type", "checkbox")
        
        td_check.appendChild(input_check)
        tr.appendChild(td_check)

        Object.values(item).forEach(value => {
            const td = document.createElement("td");
            td.textContent = value;
            tr.appendChild(td);
        });

        const td = document.createElement("td")
        td.setAttribute("type", "button")
        const cont_img = document.createElement("img")
        cont_img.setAttribute("src", "../assets/icons/trash-svgrepo-com.svg")
        cont_img.setAttribute("width", "20px")
        cont_img.setAttribute("height", "20px")
        cont_img.setAttribute("alt", "delete")

        td.appendChild(cont_img)
        tr.appendChild(td)
        tbody.appendChild(tr);
    });

    // Añadir thead y tbody a la tabla
    table.appendChild(thead);
    table.appendChild(tbody);

    // Insertar la tabla en el contenedor
    document.getElementById("container_data_admin").appendChild(table);
}
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
    modal.setAttribute("aria-labelledby", "staticBackdropLabel");
    modal.setAttribute("aria-hidden", "true");

    const modal_dialog = document.createElement("div");
    modal_dialog.setAttribute("class", "modal-dialog");
    const modal_content = document.createElement("div");
    modal_content.setAttribute("class", "modal-content");

    // Modal Header
    const modal_header = document.createElement("div");
    modal_header.setAttribute("class", "modal-header");

    const mod_header_h5 = document.createElement("h5");
    mod_header_h5.setAttribute("class", "modal-title");
    mod_header_h5.setAttribute("id", "staticBackdropLabel");
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
    modal_body.setAttribute("class", "modal-body d-flex flex-wrap");

    const div_input = document.createElement("div")
    div_input.setAttribute("class", "w-100")
    header_pedido.forEach(data => {
        const div_gen_input = document.createElement("div")
        div_gen_input.setAttribute("clas", "d-flex flex-column")

        const label_data = document.createElement("label")
        label_data.textContent=data
        const input_data = document.createElement("input")
        input_data.setAttribute("type", "text")

        div_gen_input.append(label_data)
        div_gen_input.append(input_data)

        div_input.append(div_gen_input)
    });
    modal_body.append(div_input)




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





creation_filter();
creation_search_line();
creation_modal();

// muestreo de datos dashboard
createTable(tableData);