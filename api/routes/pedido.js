const express = require("express");
const app = express();

const dotenv = require("dotenv");
dotenv.config();

//conexión con la base de datos
const { connection } = require("../config.db");

const getPedido = (request, response) => {
    connection.query("SELECT * FROM pedido",
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/pedido")
    .get(getPedido);


const getTalbePedido = (request, response) => {
    connection.query(`
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
        AND TABLE_NAME = 'pedido'
        ORDER BY ORDINAL_POSITION;
        `,
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/table/pedido")
    .get(getTalbePedido);


const postPedido = (request, response) => {
    const { cliente_id, metodo_envio, estado, date_creation, discount_id, subtotal, tax, price_total, name, surname, address, cod_postal, city, phone } = request.body;
    // comprueva si hay datos siguientes, sino manda error
    if (!cliente_id || !subtotal || !tax || !price_total) {
        return response.status(400).json({ error: "faltan datos obligatorios" })
    }
    // comprueva que si esta vacia introduce la fecha actual de sys, else la que ya tiene
    const dateCreationValue = date_creation && date_creation.trim() !== "" ? date_creation : new Date().toISOString();

    connection.query("INSERT INTO pedido (cliente_id, metodo_envio, estado, date_creation, discount_id, subtotal, tax, price_total, name, surname, address, cod_postal, city, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
        [cliente_id, metodo_envio, estado, dateCreationValue, discount_id, subtotal, tax, price_total, name, surname, address, cod_postal, city, phone],
        (error, results) => {
            if (error) {
                console.error("Error al insertar el pedido:", error);
                return response.status(500).json({ error: "Error en la base de datos" });
            }
            response.status(201).json({ "Pedido añadido correctamente": results.affectedRows });
        });
};

//ruta
app.route("/api/pedido")
    .post(postPedido);


const putPedido = (request, response) => {
    const { id } = request.params; // ID del registro a actualizar
    const { cliente_id, metodo_envio, estado, date_creation, discount_id, subtotal, tax, price_total, name, surname, address, cod_postal, city, phone } = request.body; // Campos a actualizar

    if (!id || (!name && !precio)) {
        return response.status(400).json({ error: "Faltan datos necesarios para actualizar." });
    }

    const query = `
                UPDATE pedido 
                SET cliente_id = ?, 
                    metodo_envio = ?,
                    estado = ?,
                    date_creation = ?,
                    discount_id = ?,
                    subtotal = ?,
                    tax = ? ,
                    price_total = ?,
                    name = ?,
                    surname = ?,
                    address = ?,
                    cod_postal = ?,
                    city = ?,
                    phone = ?
                WHERE pedido_id = ?`;

    connection.query(query, [cliente_id, metodo_envio, estado, date_creation, discount_id, subtotal, tax, price_total, name, surname, address, cod_postal, city, phone, id], (error, results) => {
        if (error) {
            console.error("Error al actualizar:", error);
            return response.status(500).json({ error: "Error al actualizar el pedido" });
        }

        if (results.affectedRows === 0) {
            return response.status(404).json({ error: "El pedido no existe" });
        }

        response.status(200).json({ message: "Pedido actualizado correctamente." });
    });
};

//ruta
app.route("/api/pedido/:id").put(putPedido);


const delPedido = (request, response) => {
    const id = request.params.id;
    connection.query("DELETE FROM pedido WHERE pedido_id = ?",
        [id],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Pedido eliminado": results.affectedRows });
        });
};

//ruta
app.route("/api/pedido/:id")
    .delete(delPedido);


module.exports = app;