const express = require("express");
const { connection } = require("../config.db");

class UserRoutes{
    constructor() {
        this.router = express.Router();
        this.initializeRoutes();
    }
    
    initializeRoutes() {
        this.router.get("/user", this.getUser)
        this.router.get("/table/user", this.getTalbeUser)
        this.router.post("/user", this.postUser)
        this.router.put("/user/:id", this.postUser)
        this.router.delete("/user/:id", this.delUser)
    }

    getUser(request, response) {
        connection.query("SELECT * FROM user",
            (error, results) => {
                if (error)
                    throw error;
                response.status(200).json(results);
            });
    };
    
    getTalbeUser(request, response) {
        connection.query(`
            SELECT COLUMN_NAME, DATA_TYPE
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_SCHEMA = 'Tres_Tacos_DB'
            AND TABLE_NAME = 'user'
            ORDER BY ORDINAL_POSITION;
            `,
            (error, results) => {
                if (error)
                    throw error;
                response.status(200).json(results);
            });
    };
    
    postUser(request, response) {
        const { email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1 } = request.body;
        // comprueva si hay datos siguientes, sino manda error
        if (!email || !password || !name || !surname_1){
            return response.status(400).json({error: "faltan datos obligatorios"})
        }
    
        // comprueva que si esta vacia introduce la fecha actual de sys, else la que ya tiene
        const dateCreationValue = date_creation && date_creation.trim() !== "" ? date_creation : new Date().toISOString();
    
        connection.query("INSERT INTO user(email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
            [email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, dateCreationValue, name, surname_1],
            (error, results) => {
                if (error){
                    console.error("Error al insertar el usuario:", error);
                    return response.status(500).json({ error: "Error en la base de datos" });
                }
                response.status(201).json({ "Usuario añadido correctamente": results.affectedRows });
            });
    };
    
    delUser(request, response) {
        const id = request.params.id;
        connection.query("DELETE FROM user WHERE user_id = ?",
            [id],
            (error, results) => {
                if (error)
                    throw error;
                response.status(201).json({ "Item eliminado": results.affectedRows });
            });
    };

    getRouter() {
        return this.router;
    }
}
module.exports = new UserRoutes().getRouter();