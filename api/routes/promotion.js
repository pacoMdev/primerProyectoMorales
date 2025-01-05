const express = require("express");
const { connection } = require("../config.db");
class PromotionRoutes{
    constructor() {
        this.router = express.Router();
        this.initializeRoutes();
    }
    
    initializeRoutes() {
        this.router.get("/promotion", this.getPromotion)
        this.router.get("/table/promotion", this.getTalbePromotion)
        this.router.post("/promotion", this.postPromotion)
        this.router.put("/promotion/:id", this.putPromotion)
        this.router.delete("/promotion/:id", this.delPromotion)
    }
    
    getPromotion(request, response) {
        connection.query("SELECT * FROM promotion",
            (error, results) => {
                if (error)
                    throw error;
                response.status(200).json(results);
            });
    };
    
    getTalbePromotion(request, response) {
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
    
    postPromotion (request, response) {
        const { name_discount, description, date_ini, date_fin, porcentaje, date_creation, imageURL, promotion_code } = request.body;
        // comprueva si hay datos siguientes, sino manda error
        if (!name_discount || !description || !porcentaje || !promotion_code) {
            return response.status(400).json({ error: "faltan datos obligatorio" })
        }
        // comprueva que si esta vacia introduce la fecha actual de sys, else la que ya tiene
        const dateCreationValue = date_creation && date_creation.trim() !== "" ? date_creation : new Date().toISOString();
        connection.query("INSERT INTO promotion (name_discount, description, date_ini, date_fin, porcentaje, date_creation, imageURL, promotion_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
            [name_discount, description, date_ini, date_fin, porcentaje, dateCreationValue, imageURL, promotion_code],
            (error, results) => {
                if (error) {
                    console.error("Error al insertar la promocion:", error);
                    return response.status(500).json({ error: "Error en la base de datos" });
                }
                response.status(201).json({ "Promocion añadida correctamente": results.affectedRows });
            });
    };
    
    putPromotion(request, response) {
        const { id } = request.params; // ID del registro a actualizar
        const { name_discount, description, date_ini, date_fin, porcentaje, date_creation, imageURL, promotion_code } = request.body; // Campos a actualizar
    
        if (!id || (!name_discount && !porcentaje && !promotion_code)) {
            return response.status(400).json({ error: "Faltan datos necesarios para actualizar." });
        }
    
        const query = `
                    UPDATE promotion 
                    SET name_discount = ?, 
                        description = ?,
                        date_ini = ?,
                        date_fin = ?,
                        porcentaje = ?,
                        date_creation = ?,
                        imageURL = ?,
                        promotion_code = ?
                    WHERE promotion_id = ?`;
    
        connection.query(query, [name_discount, description, date_ini, date_fin, porcentaje, date_creation, imageURL, promotion_code, id], (error, results) => {
            if (error) {
                console.error("Error al actualizar:", error);
                return response.status(500).json({ error: "Error al actualizar la promocion" });
            }
    
            if (results.affectedRows === 0) {
                return response.status(404).json({ error: "La promocion no existe" });
            }
    
            response.status(200).json({ message: "Promocion actualizada correctamente." });
        });
    };
    
    delPromotion(request, response) {
        const id = request.params.id;
        connection.query("DELETE FROM promotion WHERE promotion_id = ?",
            [id],
            (error, results) => {
                if (error)
                    throw error;
                response.status(201).json({ "Promocion eliminada": results.affectedRows });
            });
    };

    getRouter() {
        return this.router;
    }
}
module.exports = new PromotionRoutes().getRouter();