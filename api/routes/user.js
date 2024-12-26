const express = require("express");
const app = express();

const dotenv = require("dotenv");
dotenv.config();

//conexión con la base de datos
const {connection} = require("../config.db");

const getUser = (request, response) => {
    connection.query("SELECT * FROM user", 
    (error, results) => {
        if(error)
            throw error;
        response.status(200).json(results);
    });
};

//ruta
app.route("/user")
.get(getUser);


const postUser = (request, response) => {
    const {email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1} = request.body;
    connection.query("INSERT INTO user(email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ", 
    [email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dade_creation, name, surname_1],
    (error, results) => {
        if(error)
            throw error;
        response.status(201).json({"Item añadido correctamente": results.affectedRows});
    });
};

//ruta
app.route("/user")
.post(postUser);


const delUser = (request, response) => {
    const id = request.params.id;
    connection.query("DELETE FROM user WHERE user_id = ?", 
    [id],
    (error, results) => {
        if(error)
            throw error;
        response.status(201).json({"Item eliminado":results.affectedRows});
    });
};

//ruta
app.route("/user/:id")
.delete(delUser);


module.exports = app;