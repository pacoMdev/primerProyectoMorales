const express = require("express");
const app = express();

const dotenv = require("dotenv");
dotenv.config();

//conexión con la base de datos
const { connection } = require("../config.db");

const getProduct = (request, response) => {
    connection.query("SELECT * FROM product",
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/product")
    .get(getProduct);


const getTalbeProduct = (request, response) => {
    connection.query(`
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
        AND TABLE_NAME = 'product'
        ORDER BY ORDINAL_POSITION;
        `,
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/table/product")
    .get(getTalbeProduct);


const postProduct = (request, response) => {
    const { email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1 } = request.body;
    connection.query("INSERT INTO product(email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ",
        [email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Item añadido correctamente": results.affectedRows });
        });
};

//ruta
app.route("/api/product")
    .post(postProduct);


const delProduct = (request, response) => {
    const id = request.params.id;
    connection.query("DELETE FROM product WHERE product_id = ?",
        [id],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Producto eliminado": results.affectedRows });
        });
};

//ruta
app.route("/api/product/:id")
    .delete(delProduct);


module.exports = app;