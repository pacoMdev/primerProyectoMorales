const express = require("express");
const app = express();

const dotenv = require("dotenv");
dotenv.config();

//conexión con la base de datos
const { connection } = require("../config.db");

const getPromotion = (request, response) => {
    connection.query("SELECT * FROM promotion",
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/promotion")
    .get(getPromotion);


const getTalbePromotion = (request, response) => {
    connection.query(`
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
        AND TABLE_NAME = 'promotion'
        ORDER BY ORDINAL_POSITION;
        `,
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/table/promotion")
    .get(getTalbePromotion);


const postPromotion = (request, response) => {
    const { email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1 } = request.body;
    connection.query("INSERT INTO user(email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ",
        [email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Item añadido correctamente": results.affectedRows });
        });
};

//ruta
app.route("/api/promotion")
    .post(postPromotion);


const delUser = (request, response) => {
    const id = request.params.id;
    connection.query("DELETE FROM promotion WHERE promotion_id = ?",
        [id],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Promocion eliminada": results.affectedRows });
        });
};

//ruta
app.route("/api/promotion/:id")
    .delete(delUser);


module.exports = app;