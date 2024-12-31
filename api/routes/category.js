const express = require("express");
const app = express();

const dotenv = require("dotenv");
dotenv.config();

//conexión con la base de datos
const { connection } = require("../config.db");

const getCategory = (request, response) => {
    connection.query("SELECT * FROM category",
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/category")
    .get(getCategory);


const getTalbeCategory = (request, response) => {
    connection.query(`
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
        AND TABLE_NAME = 'category'
        ORDER BY ORDINAL_POSITION;
        `,
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/table/category")
    .get(getTalbeCategory);


const postCategory = (request, response) => {
    const { email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1 } = request.body;
    connection.query("INSERT INTO category(email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ",
        [email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Item añadido correctamente": results.affectedRows });
        });
};

//ruta
app.route("/api/category")
    .post(postCategory);


const delCategory = (request, response) => {
    const id = request.params.id;
    connection.query("DELETE FROM category WHERE category_id = ?",
        [id],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Categoria eliminada": results.affectedRows });
        });
};

//ruta
app.route("/api/category/:id")
    .delete(delCategory);


module.exports = app;