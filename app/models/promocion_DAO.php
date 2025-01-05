<?php
include_once("../config/Connection.php");
include_once("models/Promocion.php");
class promocion_DAO{
    /**
     * Metodo para obtener los datos de la tabla PROMOTION
     */
    public static function get_all_promotion_data(){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM promotion";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $products=[];
        while ($row = $resultado->fetch_object("Promocion")) {
            array_push($products, $row);
        }
        $conn->close();
        return $products;
    }
    /**
     * Metodo para obtener los datos de la tabla PROMOTION
     */
    public static function get_3_promotions_data(){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM promotion LIMIT 3";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $products=[];
        while ($row = $resultado->fetch_object("Promocion")) {
            array_push($products, $row);
        }
        $conn->close();
        return $products;
    }
    /**
     * Metodo para obtener los datos de la tabla PROMOTION
     */
    public static function get_all_data_promotion_by_code($promotion_code){
        $conn = Database::connect();
        $sentenciaSQL="SELECT * FROM promotion WHERE promotion_code='$promotion_code'";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $products=[];
        while ($row = $resultado->fetch_object("Promocion")) {
            array_push($products, $row);
        }
        $conn->close();
        return $products;
    }
}