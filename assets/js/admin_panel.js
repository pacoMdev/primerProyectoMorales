
/**
 * 
 */
function creation_filter() {
    const list_tables = ["pedido", "user", "ingredient", "category", "product", "promotion", "history_log"]
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

/**
 * 
 */
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

/**
 * Creacion de la tabla de forma dinamica secun el nombre de tabla recivida, por defecto pedido
 * @param {*} nameTable 
 */
async function createTable(nameTable = "pedido") {
    //guarda clave de tabla para usar mas adelante en CRUD
    sessionStorage.setItem("nameTable", nameTable)
    const nameTab = sessionStorage.getItem("nameTable")
    // crea el modal
    creation_modal(nameTab, "create")

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
    table.setAttribute("style", "width: 100%; table-layout: fixed; word-wrap: break-word;")

    // Crear encabezados de la tabla
    // const headers = ["BOX", "ID", "Name", "Age", "ESTADO"];
    const trHead = document.createElement("tr");
    // const th = document.createElement("th");
    // th.textContent = "";
    // trHead.appendChild(th);
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
        // const td_check = document.createElement("td")
        // const input_check = document.createElement("input")
        // input_check.setAttribute("type", "checkbox")

        // td_check.appendChild(input_check)
        // tr.appendChild(td_check)

        Object.values(item).forEach(value => {
            const td = document.createElement("td");
            td.setAttribute("style", "padding: 8px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;")
            td.textContent = value;
            tr.appendChild(td);
        });

        // boton editar
        const td1 = document.createElement("td")
        td1.setAttribute("type", "button")
        td1.setAttribute("class", "button_edit")
        td1.setAttribute("style", "padding-right:15px;")
        const cont_img1 = document.createElement("img")
        cont_img1.setAttribute("src", "../assets/icons/slider-3-vertical-svgrepo-com.svg")
        cont_img1.setAttribute("width", "20px")
        cont_img1.setAttribute("height", "20px")
        cont_img1.setAttribute("alt", "edit")

        td1.appendChild(cont_img1)
        tr.appendChild(td1)

        // boton eliminar
        const td = document.createElement("td")
        td.setAttribute("type", "button")
        td.setAttribute("class", "button_delete")
        td.setAttribute("style", "padding-left:15px;")
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
    
    // evento para editar los datos del tr seleccionado a traves del icono de slide 3
    document.querySelector("tbody").addEventListener("click", (event) => {
        const button = event.target.closest(".button_edit");
        if (button) {
            const trData = button.closest("tr");
            const nameTable = sessionStorage.getItem("nameTable");
            const id_data = trData.querySelector("td:nth-child(1)").textContent.trim();
            
            const trDataArr=[]
            const fullTrData = trData.querySelectorAll("td")
            fullTrData.forEach(data => {
                trDataArr.push(data.textContent)
            });

            openEditModal(header_data, trDataArr, nameTable, id_data);
        }
    });
    // evento para eliminar los datos del tr seleccionado a traves del icono de trash
    document.querySelector("tbody").addEventListener("click", (event) => {
        const button = event.target.closest(".button_delete");
        if (button) {
            const trData = button.closest("tr");
            const nameTable = sessionStorage.getItem("nameTable");
            const id_data = trData.querySelector("td:nth-child(1)").textContent.trim();
            
            // confirmacion de elminar datos
            if (confirm("¿Estas seguro de eliminar este dato?")){
                eliminarDatosTabla(nameTable, id_data);
            }
        }
    });
}

/**
 * Creacion del modal para CREATE
 * @param {*} nameTable 
 */
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
    name_campo_table.slice(1).forEach(data => {
        const div_gen_input = document.createElement("div")
        div_gen_input.setAttribute("clas", "d-flex flex-column")

        const label_data = document.createElement("label")
        label_data.textContent = data["COLUMN_NAME"]

        // crea input de form (no form)
        const input_data = document.createElement("input")
        // comprueva que tipo es (datetime, varchar, int, double, ...)
        if (data["DATA_TYPE"]=="varchar"){
            input_data.setAttribute("type", "text")

        }else if (data["DATA_TYPE"]=="int"){
            input_data.setAttribute("type", "number")

        }else if (data["DATA_TYPE"]=="double"){
            input_data.setAttribute("type", "number")

        }else if (data["DATA_TYPE"]=="datetime"){
            input_data.setAttribute("type", "datetime-local")

        }
        input_data.setAttribute("class", "input_data_table")

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
    mod_footer_button2.setAttribute("id", "all_data_table");
    mod_footer_button2.setAttribute("data-bs-dismiss", "modal");
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

    // const nameTables = sessionStorage.getItem("nameTable")

    // Añade evento al añadir a tabla desde modal
    document.getElementById("all_data_table").addEventListener("click", function(){
        const data_to_add = []
        document.querySelectorAll(".input_data_table").forEach(data =>{
            data_to_add.push(data.value)
        })
        
        const dataTable={}
        name_campo_table.slice(1).map((data, index) => {
            dataTable[data["COLUMN_NAME"]]=data_to_add[index]
        });
        
        // console.log("dataTable")
        console.log(dataTable)

        console.log("añadirDatosTabla function")
        añadirDatosTabla(nameTable, dataTable) 

    })
}

function openEditModal(header_data, trData, nameTable, id_data) {
    // Crear el modal(div form) dinámicamente
    const modal = document.createElement("div");
    modal.className = "modal";
    modal.innerHTML = `
      <div class="modal-content" style="width: 400px; left: 25%; padding: 23px;">
        <span class="close" type="button" style="width: 20px; font-size: 20px;">&times;</span>
        <h5>Modificar ${nameTable}</h5>
        <form id="modalForm">
          ${header_data.slice(1).map((key, index) => `
            <label for="${key["COLUMN_NAME"]}">${key["COLUMN_NAME"]}:</label>
            <input type="${key["DATA_TYPE"]=="varchar" ? "text" : key["DATA_TYPE"]=="int" ? "number" : key["DATA_TYPE"]=="double" ? "number" : key["DATA_TYPE"]=="datetime" ? "datetime-local" : "number"}" id="${key["COLUMN_NAME"]}" name="${key["COLUMN_NAME"]}" value="${key["DATA_TYPE"]=="datetime" ? trData[index+1].substring(0, trData[index+1].length - 1) : trData[index+1] || ""}" class="data_update">
            <br>
          `).join("")}
          <button type="submit" style="margin-top: 20px;">Guardar</button>
        </form>
      </div>
    `;

    document.body.appendChild(modal);
  
    // Mostrar el modal
    modal.style.display = "block";
  
    // Cerrar el modal
    modal.querySelector(".close").addEventListener("click", () => {
      modal.remove();
    });
    document.getElementById("modalForm").addEventListener("submit", async (event) => {
        event.preventDefault();
        const dataTable = document.getElementsByClassName("data_update")

        const dataArrTable = {}
        header_data.slice(1).map((data, index) => {
            dataArrTable[data["COLUMN_NAME"]] = dataTable[index].value
        })
        console.log(dataArrTable)

        editarDatosTabla(nameTable, id_data, dataArrTable)
        modal.remove();
        createTable(nameTable)
    })

}

function getDate() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Mes empieza en 0
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    return `${year}-${month}-${day}T${hours}:${minutes}`;
}



// READ HEADER TABLE
/**
 * Lee los datos de la api y extrae el titulo del campo y su tipo
 * @param {tabla de la api} nameTable 
 * @returns 
 */
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

// READ
/**
 * Lee los datos de la API
 * @param {tabla de la api} nameTable 
 * @returns 
 */
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

// UPDATE
/**
 * Actualiza los datos de la API
 * @param {tabla de la api} nameTable 
 * @param {id del dato a actualizar} id_data 
 * @param {datos que se van a actualizar en object o map} dataTable 
 */
async function editarDatosTabla(nameTable, id_data, dataTable) {
    try {
        const response = await fetch(`http://localhost:3300/api/${nameTable}/${id_data}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(dataTable),
        });

        if (!response.ok) throw new Error("Error al actualizar los datos");

        const resultado = await response.json();
        // Modificar user id y date_creation
        const dataLog = {
            "date_creation": getDate(),
            "name": "UPDATE data",
            "description": `Update of ${nameTable} id -> ${id_data}`,
            "user_id": "1"
        }
        añadirDatosTablaLog(dataLog)
        console.log(resultado);
    } catch (error) {
        console.error("Error:", error);
    }
}

// DELETE
/**
 * Elimina todos los datos de la tabla indicada y por su id en la API
 * @param {tabla de la api} nameTable 
 * @param {id del dato a eliminar} id_data 
 * @returns 
 */
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
        // Modificar user id y date_creation
        const dataLog = {
            "date_creation": getDate(),
            "name": "DELETE data",
            "description": `Delete of ${nameTable} id->${id_data}`,
            "user_id": "1"
        }
        añadirDatosTablaLog(dataLog)
        return datos; // Devolver los datos
    } catch (error) {
        console.error('Error:', error);
    }
}

// CREATE
/**
 * Añade los datos obtenidos a la API
 * @param {tabla de la api} nameTable 
 * @param {datos para insertar a api map o object} dataTable 
 * @returns 
 */
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
        
        // Modificar user id y date_creation
        const dataLog = {
            "date_creation": getDate(),
            "name": "CREATE data",
            "description": `Creation of ${nameTable}}`,
            "user_id": "1"
        }
        añadirDatosTablaLog(dataLog)
        return datos; // Devolver los datos
    } catch (error) {
        console.error('Error:', error);
    }
}
// CREATE LOG
/**
 * Añade los datos obtenidos a la API LOG
 * @param {tabla de la api} nameTable 
 * @param {datos para insertar a api map o object} dataTable 
 * @returns 
 */
async function añadirDatosTablaLog(dataTable){
    try {
        const response = await fetch(`http://localhost:3300/api/history_log`, {
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