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
    const { email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1 } = request.body;
    connection.query("INSERT INTO pedido(email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ",
        [email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Item añadido correctamente": results.affectedRows });
        });
};

//ruta
app.route("/api/pedido")
    .post(postPedido);


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