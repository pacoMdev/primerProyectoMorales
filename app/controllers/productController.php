<?php

include_once("models/Producto.php");
include_once("models/Producto_DAO.php");
include_once("models/category_DAO.php");

class productController{
    public function menu(){
        // Mostrar todos los errores, advertencias y mensajes
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $listCategorys=category_DAO::get_all_category_data();       // todas las categorias

        foreach($listCategorys as $category){
            $products = producto_DAO::get_all_product_data_by_category($category->getCategory_id());
            $category->products = $products;
        }
        

        include_once("views/menu.php");     //muestra la view de menu
    }
}