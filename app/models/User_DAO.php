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
    public static function get_all_user_by_email($email){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM user WHERE email='$email'";
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
    public static function save_user_data($usuario){
        $conn = Database::connect();

        $sentenciaSQL="INSERT INTO user (email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), ?, ?)";
        $stmtm = $conn->prepare($sentenciaSQL);

        $email = $usuario->getEmail();
        $apple_id = $usuario->getApple_id();
        $password = $usuario->getPassword();
        $phone = $usuario->getPhone();
        $direccion = $usuario->getDireccion();
        $poblacion = $usuario->getPoblacion();
        $ciudad =$usuario->getCiudad();
        $date_modification = "NOW()";
        $date_creation = "NOW()";
        $name = $usuario->getName();
        $surname_1 = $usuario->getsurname_1();



        $stmtm->bind_param("sssisssss", $email, $apple_id,  $password, $phone, $direccion, $poblacion, $ciudad, $name, $surname_1);
        $stmtm->execute();
        $conn->close();
    }
    /**
     * Metodo para actualizar los datos del usuario pasador como objeto User
     * @param mixed $usuario
     * @return void
     */
    public static function update_user_data($usuario){
        $conn = Database::connect();
        $emailUser=$usuario->getEmail();

        $sentenciaSQL="UPDATE user (email, apple_id, password, phone, direccion, poblacion, ciudad, date_modification, date_creation, name, surname_1) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), ?, ?) WHERE email='$emailUser'";
        $stmtm = $conn->prepare($sentenciaSQL);

        $email = $usuario->getEmail();
        $apple_id = $usuario->getApple_id();
        $password = $usuario->getPassword();
        $phone = $usuario->getPhone();
        $direccion = $usuario->getDireccion();
        $poblacion = $usuario->getPoblacion();
        $ciudad =$usuario->getCiudad();
        $date_modification = "NOW()";
        $date_creation = "NOW()";
        $name = $usuario->getName();
        $surname_1 = $usuario->getsurname_1();



        $stmtm->bind_param("sssisssss", $email, $apple_id,  $password, $phone, $direccion, $poblacion, $ciudad, $name, $surname_1);
        $stmtm->execute();
        $conn->close();
    }
    /**
     * Metodo para eliminar un producto por el id pasado
     * @param mixed $producto_id    Id del producto a eliminar
     * @return void     Funcion que solo se ejecuta
     */
    public static function destroy_user($user_id){
        $conn = Database::connect();
        $sentenciaSQL="DELETE FROM user WHERE user_id=".$user_id;
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $conn->close();
    }
}