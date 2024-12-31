const tableData = [
    { id: 1, name: "Alice", age: 25 },
    { id: 2, name: "Bob", age: 30 },
    { id: 3, name: "Charlie", age: 35 },
];
const header_pedido = ["pedido_id", "user_id", "discount_id"]

function creation_filter() {
    const list_tables = ["pedido", "user", "ingredient", "category", "product", "promotion"]
    const general_div = document.createElement("div")
    general_div.setAttribute("class", "container w-100")
    list_tables.forEach(table => {
        const div_table = document.createElement("button")
        div_table.textContent = table
        div_table.setAttribute("id", "filter_table")
        div_table.setAttribute("data_filter_table", table)
        div_table.setAttribute("class", "col-12 col-lg-8 w-auto")
        general_div.append(div_table);
    });
    general_div.setAttribute("class", "d-flex gap-3")
    document.getElementById("container_data_admin").appendChild(general_div)

}
function creation_search_line() {

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
    button_search.textContent = "Search"
    



    input_search_gen.append(button_search)
    document.getElementById("container_data_admin").appendChild(input_search_gen)
}
// Crear una tabla
async function createTable(nameTable = "pedido") {
    //guarda clave de tabla para usar mas adelante en CRUD
    sessionStorage.setItem("nameTable", nameTable)
    const nameTab = sessionStorage.getItem("nameTable")
    // crea el modal
    creation_modal(nameTab)

    const bloque = document.getElementById("tabla_admin"); // Seleccionar el elemento
    if (bloque) {
        bloque.remove(); // Eliminar el elemento del DOM
    }


    // obtiene los datos de la api
    const data = await obtenerDatosTabla(nameTable);    //datos tabla
    const header_data = await obtenerNombresTablas(nameTable)   //nombre campos tabla
    // console.log(header_data[0]["COLUMN_NAME"])


    // Crear elementos principales
    const table = document.createElement("table");
    const thead = document.createElement("thead");
    const tbody = document.createElement("tbody");

    // alade id a tabla
    table.setAttribute("id", "tabla_admin")

    // Crear encabezados de la tabla
    // const headers = ["BOX", "ID", "Name", "Age", "ESTADO"];
    const trHead = document.createElement("tr");
    const th = document.createElement("th");
    th.textContent = "";
    trHead.appendChild(th);
    header_data.forEach(header => {
        const th = document.createElement("th");
        th.textContent = header["COLUMN_NAME"];
        trHead.appendChild(th);
    });
    thead.appendChild(trHead);

    // Crear filas de la tabla
    data.forEach(item => {
        const tr = document.createElement("tr");
        tr.setAttribute("class", "tr_data");
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
        td.setAttribute("class", "button_delete")
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
    

    // evento para eliminar los datos del tr seleccionado a traves del icono de trash
    document.querySelector("tbody").addEventListener("click", (event) => {
        const button = event.target.closest(".button_delete");
        if (button) {
            const trData = button.closest("tr");
            const nameTable = sessionStorage.getItem("nameTable");
            const id_data = trData.querySelector("td:nth-child(2)").textContent.trim();
            
            // confirmacion de elminar datos
            if (confirm("¿Estas seguro de eliminar este dato?")){
                eliminarDatosTabla(nameTable, id_data);
            }
        }
    });
}
 async function creation_modal(nameTable) {
    // elimina modal si ya existe
    const bloque = document.getElementById("staticBackdrop"); // Seleccionar el elemento
    // console.log(bloque)
    if (bloque) {
        bloque.remove(); // Eliminar el elemento del DOM
    }

    const name_campo_table = await obtenerNombresTablas(nameTable)
    // console.log(name_campo_table)



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
    mod_header_h5.textContent = `Añadir ${sessionStorage.getItem("nameTable")}`;

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
    name_campo_table.forEach(data => {
        const div_gen_input = document.createElement("div")
        div_gen_input.setAttribute("clas", "d-flex flex-column")

        const label_data = document.createElement("label")
        label_data.textContent = data["COLUMN_NAME"]
        const input_data = document.createElement("input")
        input_data.setAttribute("type", "text")
        input_data.setAttribute("id", "input_data_table")

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
    mod_footer_button2.setAttribute("id", "add_data_table");
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

async function obtenerNombresTablas(nameTable) {
    try {
        const response = await fetch(`http://localhost:3300/api/table/${nameTable}`);
        if (!response.ok) throw new Error('Error al obtener los nombres de las tablas');
        const nombresTablas = await response.json();
        return nombresTablas
    } catch (error) {
        console.error('Error:', error);
    }
}

async function obtenerDatosTabla(nameTable) {
    try {
        const response = await fetch(`http://localhost:3300/api/${nameTable}`);
        if (!response.ok) throw new Error(`Error al obtener datos de la tabla ${nameTable}`);
        const datos = await response.json();
        return datos; // Devolver los datos
    } catch (error) {
        console.error('Error:', error);
    }
}
async function eliminarDatosTabla(nameTable, id_data){
    try {
        const response = await fetch(`http://localhost:3300/api/${nameTable}/${id_data}`, {
            method: 'DELETE', // Método DELETE
            headers: {
                'Content-Type': 'application/json', // Indica que los datos son JSON
            }
        });
        if (!response.ok) throw new Error(`Error al eliminar los datos`);
        const datos = await response.json();
        createTable(nameTable)
        return datos; // Devolver los datos
    } catch (error) {
        console.error('Error:', error);
    }
}
async function añadirDatosTabla(nameTable, dataTable){
    try {
        const response = await fetch(`http://localhost:3300/api/${nameTable}`, {
            method: 'POST', // Método POST
            headers: {
                'Content-Type': 'application/json', // Indica que los datos son JSON
            },
            body: JSON.stringify(dataTable)
        });
        if (!response.ok) throw new Error(`Error al añadir los datos`);
        const datos = await response.json();
        createTable(nameTable)
        return datos; // Devolver los datos
    } catch (error) {
        console.error('Error:', error);
    }
}



// function iconTrash(){
//     document.querySelectorAll(".tr_data").forEach(trData => {
//         const nameTable = sessionStorage.getItem("nameTable")
//         // console.log(nameTable)
//         const id_data = trData.querySelector("td:nth-child(2)").textContent.trim(); // Seleccionar el segundo <td>
//         // console.log(id_data)
//         trData.querySelector(".button_delete").addEventListener("click", () => eliminarDatosTabla(nameTable, id_data))
//     });
// }



// muestra elementos de accion
creation_filter();
creation_search_line();
// creation_modal();

// muestreo de datos dashboard
createTable()


// Añade accion a eliminar dato en especifico (img trash)
// Añade action listener click a los filtros de tablas (Falta añadir al boton un post a logs)
document.querySelectorAll("#filter_table").forEach(data_table =>{
    const table_filter_data = data_table.textContent
    data_table.addEventListener("click", () =>  createTable(table_filter_data))
    console.log("Event boton pulsado a " + data_table.textContent + ": created OK")
});





// Añade evento al añadir a tabla desde modal
// document.getElementById("add_data_table").addEventListener("click", function(){
//     const data_to_add = document.querySelectorAll("#input_data_table").forEach(data =>{
//         console.log(data.value)
//     })
//     const nameTable = sessionStorage.getItem("nameTable")
//     const data_header_table = obtenerDatosTabla(nameTable)

//     dataTable={}
//     data_header_table.forEach((data, index) => {
//         dataTable[data]=data_header_table[index]
//     });
//     console.log("ABC:"+dataTable)

//     // añadirDatosTabla(nameTable, dataTable)   
// })