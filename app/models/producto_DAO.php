<?php

include_once("config/Connection.php");
include_once("models/Producto.php");

class producto_DAO{
    /**
     * Metodo para obtener todos los datos de la tabla product
     * @return array    Devuelve un array con todos los productos
     */ 
    public static function get_all_product_data(){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM product";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $products=[];
        while ($row = $resultado->fetch_object("Producto")) {
            array_push($products, $row);
        }
        $conn->close();
        return $products ;
    }
    public static function get_all_product_data_by_id($producto_id){
        $conn = Database::connect();
        var_dump(gettype($producto_id));
        $sentenciaSQL="SELECT * FROM product WHERE product_id=$producto_id";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $products=[];
        while ($row = $resultado->fetch_object("Producto")) {
            array_push($products, $row);
        }
        $conn->close();
        return $products ;
    }
    /**
     * Metodo que devuelve todos los productos con X nombre de categoria
     * @param mixed $name_cat
     * @return array
     */
    public static function get_all_product_data_by_category($category_id){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM product WHERE category_id=$category_id";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $products=[];
        while ($row = $resultado->fetch_object("Producto")) {
            array_push($products, $row);
        }
        $conn->close();
        return $products ;
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