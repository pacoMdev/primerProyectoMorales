<?php

include_once("config/Connection.php");
include_once("model/User.php");

class producto_DAO{
    /**
     * Metodo para obtener todos los datos de la tabla user
     * @return array    Devuelve un array con todos los user
     */ 
    public static function get_all_user_data(){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM user";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();

        $usuarios=[];
        while ($row = $resultado->fetch_object()) {
            array_push($products, new User($row->user_id, $row->email, $row->apple_id, $row->password, $row->phone, $row->direccion, $row->poblacion, $row->ciudad, $row->date_modification, $row->date_creation, $row->name, $row->surname));
        }
        $conn->close();
        return $usuarios;
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
    public static function save_product_data($usuario){
        $conn = Database::connect();

        $sentenciaSQL="INSERT INTO user (email, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtm = $conn->prepare($sentenciaSQL);

        $stmtm->bind_param("ssisssssss",$usuario->getEmail(), $password->getPassword(), $phone->getPhone(), $usuario->getEmail());
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