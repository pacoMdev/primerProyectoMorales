const express = require("express");
const app = express();

const dotenv = require("dotenv");
dotenv.config();

//conexión con la base de datos
const { connection } = require("../config.db");

const getIngredient = (request, response) => {
    connection.query("SELECT * FROM ingredient",
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/ingredient")
    .get(getIngredient);


const getTalbeIngredient = (request, response) => {
    connection.query(`
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
        AND TABLE_NAME = 'ingredient'
        ORDER BY ORDINAL_POSITION;
        `,
        (error, results) => {
            if (error)
                throw error;
            response.status(200).json(results);
        });
};

//ruta
app.route("/api/table/ingredient")
    .get(getTalbeIngredient);


    const postIngredient = (request, response) => {
        const { name, precio } = request.body;
        // comprueva si hay datos siguientes, sino manda error
        if (!name || precio){
            return response.status(400).json({error: "faltan datos obligatorios"})
        }
        connection.query("INSERT INTO ingredient (name, precio) VALUES (?, ?)",
            [name, precio],
            (error, results) => {
                if (error){
                    console.error("Error al insertar el ingrediente:", error);
                    return response.status(500).json({ error: "Error en la base de datos" });
                }
                response.status(201).json({ "Ingrediente añadido correctamente": results.affectedRows });
            });
    };

//ruta
app.route("/api/ingredient")
    .post(postIngredient);


const delIngredient = (request, response) => {
    const id = request.params.id;
    connection.query("DELETE FROM ingredient WHERE ingredient_id = ?",
        [id],
        (error, results) => {
            if (error)
                throw error;
            response.status(201).json({ "Ingrediente eliminado": results.affectedRows });
        });
};

//ruta
app.route("/api/ingredient/:id")
    .delete(delIngredient);


module.exports = app;