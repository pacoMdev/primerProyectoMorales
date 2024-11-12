<?php

include_once("config/Connection.php");
include_once("model/Producto.php");

class producto_DAO{
    /**
     * Metodo para obtener todos los datos de la tabla product
     * @return array    Devuelve un array con todos los productos
     */ 
    public static function get_all_product_data(){
        $conn = Database::connect();
        $sentenciaSQL="SELECT product_id, name, description, imageURL, price, date_creation FROM product";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();

        $productos=[];
        while ($row = $resultado->fetch_object()) {
            array_push($products, new Producto($row->product_id, $row->name_product, $row->description, $row->image_url, $row->price_product, $row->date_creation_product, $row->category_id));
        }
        $conn->close();
        return $productos;
    }
    /**
     * Metodo para añadir contenido a TABLA product
     * @param mixed $name
     * @param mixed $description
     * @param mixed $imageURL
     * @param mixed $price
     * @param mixed $category_id
     * @param mixed $date_creation
     * @return void     Funcion que solo se ejecuta
     */
    public static function save_product_data($producto){
        $conn = Database::connect();

        $sentenciaSQL="INSERT INTO product (name, description, imageURL, price, category_id, date_creation) VALUES (?, ?, ?, ?, ?, ?)";
        $stmtm = $conn->prepare($sentenciaSQL);

        $stmtm->bind_param("sssdsi", $producto->getName_product, $producto->getDescription, $producto->getImage_url, $producto->getPrice_product, $producto->getDate_creation_product, $producto->getCategory_id);
        $stmtm->execute();
        $conn->close();
    }
    /**
     * Metodo para eliminar un producto por el id pasado
     * @param mixed $producto_id    Id del producto a eliminar
     * @return void     Funcion que solo se ejecuta
     */
    public static function destroy_function($producto_id){
        $conn = Database::connect();
        $sentenciaSQL="DELETE FROM product WHERE product_id=".$producto_id;
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $conn->close();
    }
}