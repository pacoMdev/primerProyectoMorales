<?php

include_once("models/Producto.php");
include_once("models/Producto_DAO.php");

class productController{
    public function menu(){
        // Mostrar todos los errores, advertencias y mensajes
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $listCategorys=category_DAO::get_all_category_data();
        // $listProducts=producto_DAO::get_all_product_data_by_category("Tacos");
        include_once("views/menu.php");
    }
    public function resume(){
        // hay que modificar la tabla para añadir id

        header("Location:?controller=producto&action=index");

    }
}