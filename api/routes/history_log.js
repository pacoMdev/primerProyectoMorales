const express = require("express");
const { connection } = require("../config.db");

class History_logReoutes {
    constructor() {
        this.router = express.Router();
        this.initializeRoutes();
    }
    
    initializeRoutes() {
        this.router.get("/history_log", this.getLog)
        this.router.get("/table/history_log", this.getTalbeLog)
        this.router.post("/history_log", this.postLog)
        this.router.put("/history_log/:id", this.putLog)
        this.router.delete("/history_log/:id", this.delLog)
    }

    getLog (request, response) {
        connection.query("SELECT * FROM history_log",
            (error, results) => {
                if (error)
                    throw error;
                response.status(200).json(results);
            });
    };

    getTalbeLog(request, response) {
        connection.query(`
        SELECT COLUMN_NAME, DATA_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
        AND TABLE_NAME = 'history_log'
        ORDER BY ORDINAL_POSITION;
        `,
            (error, results) => {
                if (error)
                    throw error;
                response.status(200).json(results);
            });
    };

    postLog(request, response) {
        const { date_creation, name, description, user_id } = request.body;
        // comprueva si hay datos siguientes, sino manda error
        if (!name || !description || !user_id) {
            return response.status(400).json({ error: "faltan datos obligatorio" })
        }
        // comprueva que si esta vacia introduce la fecha actual de sys, else la que ya tiene
        const dateCreationValue = date_creation && date_creation.trim() !== "" ? date_creation : new Date().toISOString();
        connection.query("INSERT INTO history_log (date_creation, name, description, user_id) VALUES (?, ?, ?, ?)",
            [date_creation, name, description, user_id],
            (error, results) => {
                if (error) {
                    console.error("Error al insertar el log:", error);
                    return response.status(500).json({ error: "Error en la base de datos" });
                }
                response.status(201).json({ "Log añadido correctamente": results.affectedRows });
            });
    };

    putLog(request, response) {
        const { id } = request.params; // ID del registro a actualizar
        const { date_creation, name, description, user_id } = request.body; // Campos a actualizar

        if (!id || (!date_creation && !name && !description && !user_id)) {
            return response.status(400).json({ error: "Faltan datos necesarios para actualizar." });
        }

        const query = `
                UPDATE history_log 
                SET date_creation = ?, 
                    name = ?,
                    description = ?,
                    user_id = ?
                WHERE log_id = ?`;

        connection.query(query, [date_creation, name, description, user_id], (error, results) => {
            if (error) {
                console.error("Error al actualizar:", error);
                return response.status(500).json({ error: "Error al actualizar el log" });
            }

            if (results.affectedRows === 0) {
                return response.status(404).json({ error: "El log no existe" });
            }

            response.status(200).json({ message: "Log actualizado correctamente." });
        });
    };

    delLog(request, response) {
        const id = request.params.id;
        connection.query("DELETE FROM history_log WHERE log_id = ?",
            [id],
            (error, results) => {
                if (error)
                    throw error;
                response.status(201).json({ "Log eliminado": results.affectedRows });
            });
    };
    getRouter() {
        return this.router;
    }
}
module.exports = new History_logReoutes().getRouter();