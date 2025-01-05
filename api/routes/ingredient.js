const express = require("express");
const { connection } = require("../config.db");

class IngredientRoutes {
    constructor() {
        this.router = express.Router();
        this.initializeRoutes();
    }
    
    initializeRoutes() {
        this.router.get("/ingredient", this.getIngredient)
        this.router.get("/table/ingredient", this.getTableIngredient)
        this.router.post("/ingredient", this.postIngredient)
        this.router.put("/ingredient/:id", this.putIngredient)
        this.router.delete("/ingredient/:id", this.delIngredient)
    }

    getIngredient(request, response) {
        connection.query("SELECT * FROM ingredient",
            (error, results) => {
                if (error)
                    console.log("Error en lecura de datos")
                response.status(200).json(results);
            });
    };

    getTableIngredient(request, response) {
        connection.query(`
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
        AND TABLE_NAME = 'ingredient'
        ORDER BY ORDINAL_POSITION;
        `,
            (error, results) => {
                if (error)
                    console.log("Error en lecura de datos")
                response.status(200).json(results);
            });
    };

    postIngredient(request, response) {
        const { name, precio } = request.body;
        // comprueva si hay datos siguientes, sino manda error
        if (!name || !precio) {
            return response.status(400).json({ error: "faltan datos obligatorio" })
        }
        connection.query("INSERT INTO ingredient (name, precio) VALUES (?, ?)",
            [name, precio],
            (error, results) => {
                if (error) {
                    console.error("Error al insertar el ingrediente:", error);
                    return response.status(500).json({ error: "Error en la base de datos" });
                }
                response.status(201).json({ "Ingrediente añadido correctamente": results.affectedRows });
            });
    };

    putIngredient(request, response) {
        const { id } = request.params; // ID del registro a actualizar
        const { name, precio } = request.body; // Campos a actualizar

        if (!id || (!name && !precio)) {
            return response.status(400).json({ error: "Faltan datos necesarios para actualizar." });
        }

        const query = `
            UPDATE ingredient 
            SET name = ?, 
                precio = ?
            WHERE ingredient_id = ?`;

        connection.query(query, [name, precio, id], (error, results) => {
            if (error) {
                console.error("Error al actualizar:", error);
                return response.status(500).json({ error: "Error al actualizar el ingrediente" });
            }

            if (results.affectedRows === 0) {
                return response.status(404).json({ error: "El ingrediente no existe" });
            }

            response.status(200).json({ message: "Ingrediente actualizado correctamente." });
        });
    };

    delIngredient(request, response) {
        const id = request.params.id;
        connection.query("DELETE FROM ingredient WHERE ingredient_id = ?",
            [id],
            (error, results) => {
                if (error)
                    throw error;
                response.status(201).json({ "Ingrediente eliminado": results.affectedRows });
            });
    };
    
    getRouter() {
        return this.router;
    }
}
module.exports = new IngredientRoutes().getRouter();