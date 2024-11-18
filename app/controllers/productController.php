<?php

include_once("models/Producto.php");
include_once("models/Producto_DAO.php");

class productController{
    public function menu(){
        // Mostrar todos los errores, advertencias y mensajes
        ini_set('display_errors', 1);
        error_reporting(E_ALL);


        $listCategorys=category_DAO::get_all_category_data();       // todas las categorias
        $listProducts=producto_DAO:: get_all_product_data();        //todos los productos
        include_once("views/menu.php");     //muestra la view
    }
    public function resume(){
        // hay que modificar la tabla para añadir id

        header("Location:?controller=producto&action=index");

    }
}