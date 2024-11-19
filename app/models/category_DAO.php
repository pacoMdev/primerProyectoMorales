<?php

include_once("config/Connection.php");
include_once("models/Category.php");

class category_DAO{
    /**
     * Metodo para obtener todos los datos de la tabla category
     * @return array    Devuelve un array con todos los category
     */ 
    public static function get_all_category_data(){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM category";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $products=[];
        while ($row = $resultado->fetch_object()) {
            array_push($products, new Category($row->category_id, $row->nameCategory, $row->date_creation));
        }
        $conn->close();
        return $products ;
    }
}