<?php

include_once("models/Producto.php");
include_once("models/Producto_DAO.php");
include_once("models/category_DAO.php");
include_once("../controllers/sessionController.php");

class productController{
    public function menu(){
        // Mostrar todos los errores, advertencias y mensajes
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        sessionController::start_session();
        // $_SESSION["cart_products"]=[];
        $contadorProductos=count($_SESSION["cart_products"]);
        
        $listCategorys=category_DAO::get_all_category_data();       // todas las categorias

        foreach($listCategorys as $category){
            $products = producto_DAO::get_all_product_data_by_category($category->getCategory_id());
            $category->products = $products;
        }
        

        include_once("views/menu.php");     //muestra la view de menu
    }
    public function add_cart(){
        sessionController::start_session();
        $product_id = $_GET["product_id"];
        $product = producto_DAO::get_all_product_data_by_id($product_id);
        // $productC = new Producto();
        // $productC->hidrate($product);

        sessionController::save_product_cart($product);
        header("Location: ?controller=cart&action=resume");
    }
    public function del_cart(){
        sessionController::start_session();
        $product_id = $_GET["product_id"];
        sessionController::del_product_cart($product_id);
        // header("Location: ?controller=cart&action=resume");
    }
}