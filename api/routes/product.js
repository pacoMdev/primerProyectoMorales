const express = require("express");
const { connection } = require("../config.db");

class ProductRoutes{
    constructor() {
        this.router = express.Router();
        this.initializeRoutes();
    }
    
    initializeRoutes() {
        this.router.get("/product", this.getProduct)
        this.router.get("/table/product", this.getTalbeProduct)
        this.router.post("/product", this.postProduct)
        this.router.put("/product/:id", this.putProduct)
        this.router.delete("/product/:id", this.delProduct)
    }
    
    getProduct(request, response) {
        connection.query("SELECT * FROM product",
            (error, results) => {
                if (error)
                    throw error;
                response.status(200).json(results);
            });
    };
    
    getTalbeProduct(request, response) {
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
    
    postProduct(request, response) {
        const { name, description, imageURL, price, category_id, date_creation } = request.body;
        // comprueva si hay datos siguientes, sino manda error
        if (!name || !description || !price || !category_id) {
            return response.status(400).json({ error: "faltan datos obligatorio" })
        }
    
        connection.query("INSERT INTO product (name, description, imageURL, price, category_id, date_creation) VALUES (?, ?, ?, ?, ?, ?)",
            [name, description, imageURL, price, category_id, dateCreationValue],
            (error, results) => {
                if (error) {
                    console.error("Error al insertar el producto:", error);
                    return response.status(500).json({ error: "Error en la base de datos" });
                }
                response.status(201).json({ "Producto añadido correctamente": results.affectedRows });
            });
    };
    
    putProduct(request, response) {
        const { id } = request.params; // ID del registro a actualizar
        const { name, description, imageURL, price, category_id, date_creation } = request.body; // Campos a actualizar
    
        if (!id || (!name && !description && !price && !category_id)) {
            return response.status(400).json({ error: "Faltan datos necesarios para actualizar." });
        }
    
        const query = `
                    UPDATE product 
                    SET name = ?, 
                        description = ?,
                        imageURL = ?,
                        price = ?,
                        category_id = ?,
                        date_creation = ?
                    WHERE product_id = ?`;
    
        connection.query(query, [name, description, imageURL, price, category_id, date_creation, id], (error, results) => {
            if (error) {
                console.error("Error al actualizar:", error);
                return response.status(500).json({ error: "Error al actualizar el producto" });
            }
    
            if (results.affectedRows === 0) {
                return response.status(404).json({ error: "El producto no existe" });
            }
    
            response.status(200).json({ message: "Producto actualizado correctamente." });
        });
    };
    
    delProduct(request, response) {
        const id = request.params.id;
        connection.query("DELETE FROM product WHERE product_id = ?",
            [id],
            (error, results) => {
                if (error)
                    throw error;
                response.status(201).json({ "Producto eliminado": results.affectedRows });
            });
    };

    getRouter() {
        return this.router;
    }
}
module.exports = new ProductRoutes().getRouter();