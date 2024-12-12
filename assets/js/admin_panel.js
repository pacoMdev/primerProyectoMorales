const container_data = document.getElementById("admin_panel")


const tableData = [
    { id: 1, name: "Alice", age: 25 },
    { id: 2, name: "Bob", age: 30 },
    { id: 3, name: "Charlie", age: 35 },
];

// Crear una tabla
function createTable(data) {
    // Crear elementos principales
    const table = document.createElement("table");
    const thead = document.createElement("thead");
    const tbody = document.createElement("tbody");

    // Crear encabezados de la tabla
    const headers = ["ID", "Name", "Age"];
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
        Object.values(item).forEach(value => {
            const td = document.createElement("td");
            td.textContent = value;
            tr.appendChild(td);
        });
        tbody.appendChild(tr);
    });

    // Añadir thead y tbody a la tabla
    table.appendChild(thead);
    table.appendChild(tbody);

    // Insertar la tabla en el contenedor
    document.getElementById("table-container").appendChild(table);
}

// Llamar a la función para crear la tabla
createTable(tableData);