<?php

include_once("config/Connection.php");
include_once("models/User.php");

class Users_DAO{
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
        while ($row = $resultado->fetch_object("User")) {
            array_push($usuarios, $row);
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

        $stmtm->bind_param("ssisssssss",$usuario->getEmail(), $usuario->getPassword(), $usuario->getPhone(), $usuario->getPoblacion(), $usuario->getCiudad(), $usuario->getDate_modification(), $usuario->getDate_creation(), $usuario->getName(), $usuario->getsurname_1());
        $stmtm->execute();
        $conn->close();
    }
    /**
     * Metodo para eliminar un producto por el id pasado
     * @param mixed $producto_id    Id del producto a eliminar
     * @return void     Funcion que solo se ejecuta
     */
    public static function destroy_function($user_id){
        $conn = Database::connect();
        $sentenciaSQL="DELETE FROM user WHERE user_id=".$user_id;
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $conn->close();
    }
}