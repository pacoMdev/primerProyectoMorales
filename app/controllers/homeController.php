<?php
include_once("models/Producto_DAO.php");
include_once("models/category_DAO.php");

class homeController{
    public function index(){
        include_once("views/main.php");
    }
    public function profile(){
        include_once("views/profile.php");
    }
    public function menu(){
        // Mostrar todos los errores, advertencias y mensajes
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $listCategorys=category_DAO::get_all_category_data();
        // $listProducts=producto_DAO::get_all_product_data_by_category("Tacos");
        include_once("views/menu.php");
    }
}