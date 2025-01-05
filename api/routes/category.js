const express = require("express");
const { connection } = require("../config.db");

class CategoryRoutes {
    constructor() {
        this.router = express.Router();
        this.initializeRoutes();
    }
    
    initializeRoutes() {
        this.router.get("/category", this.getCategory)
        this.router.get("/table/category", this.getTalbeCategory)
        this.router.post("/category", this.postCategory)
        this.router.put("/category/:id", this.putCategory)
        this.router.delete("/category/:id", this.delCategory)
    }

    getCategory(request, response) {
        connection.query("SELECT * FROM category",
            (error, results) => {
                if (error)
                    throw error;
                response.status(200).json(results);
            });
    };

    getTalbeCategory(request, response) {
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

    postCategory(request, response) {
        const { nameCategory, date_creation } = request.body;
        // comprueva si hay datos siguientes, sino manda error
        if (!nameCategory || !date_creation) {
            return response.status(400).json({ error: "faltan datos obligatorio" })
        }
        connection.query("INSERT INTO category (nameCategory, date_creation) VALUES (?, ?)",
            [nameCategory, date_creation],
            (error, results) => {
                if (error) {
                    console.error("Error al insertar la categoria:", error);
                    return response.status(500).json({ error: "Error en la base de datos" });
                }
                response.status(201).json({ "Categoria añadida correctamente": results.affectedRows });
            });
    };

    putCategory(request, response) {
        const { id } = request.params; // ID del registro a actualizar
        const { nameCategory, date_creation } = request.body; // Campos a actualizar

        if (!id || (!name && !precio)) {
            return response.status(400).json({ error: "Faltan datos necesarios para actualizar." });
        }

        const query = `
                UPDATE category 
                SET nameCategory = ?, 
                    date_creation = ?
                WHERE category_id = ?`;

        connection.query(query, [nameCategory, date_creation, id], (error, results) => {
            if (error) {
                console.error("Error al actualizar:", error);
                return response.status(500).json({ error: "Error al actualizar la categoria" });
            }

            if (results.affectedRows === 0) {
                return response.status(404).json({ error: "La categoria no existe" });
            }

            response.status(200).json({ message: "Categoria actualizada correctamente." });
        });
    };

    delCategory(request, response) {
        const id = request.params.id;
        connection.query("DELETE FROM category WHERE category_id = ?",
            [id],
            (error, results) => {
                if (error)
                    throw error;
                response.status(201).json({ "Categoria eliminada": results.affectedRows });
            });
    };
    getRouter() {
        return this.router;
    }
}
module.exports = new CategoryRoutes().getRouter();