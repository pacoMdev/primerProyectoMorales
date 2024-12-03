<?php

include_once("models/Producto.php");
include_once("models/Producto_DAO.php");
include_once("models/category_DAO.php");
include_once("../controllers/sessionController.php");

class productController{
    public function menu(){
        // // Mostrar todos los errores, advertencias y mensajes
        // ini_set('display_errors', 1);
        // error_reporting(E_ALL);
        sessionController::start_session();
        // $_SESSION["cart_products"]=[];
        $contadorProductos=sessionController::cont_product_cart();
        

        $listCategorys=category_DAO::get_all_category_data();       // todas las categorias

        foreach($listCategorys as $category){
            $products = producto_DAO::get_all_product_data_by_category($category->getCategory_id());
            // $finded = sessionController::find_product_cart();
            $category->products = $products;
        }
        // var_dump($listCategorys[0]);

        include_once("views/menu.php");     //muestra la view de menu
    }
    public function menu2(){
        // // Mostrar todos los errores, advertencias y mensajes
        // ini_set('display_errors', 1);
        // error_reporting(E_ALL);
        sessionController::start_session();
        // $_SESSION["cart_products"]=[];
        $contadorProductos=sessionController::cont_product_cart();
        

        $listCategorys=category_DAO::get_all_category_data();       // todas las categorias

        foreach($listCategorys as $category){
            $products = producto_DAO::get_all_product_data_by_category($category->getCategory_id());
            // $finded = sessionController::find_product_cart();
            $category->products = $products;
        }

        $listCategorys = [];
        foreach($listCategorys as $category){
            $products = producto_DAO::get_all_product_data_by_category($category->getCategory_id());
            // continuar iterandodo desde prodcutsos
            // añadir existe o no

        }

        // var_dump($listCategorys[0]);

        // include_once("views/menu.php");     //muestra la view de menu

    }
    public function add_cart(){
        sessionController::start_session();
        $product_id = $_GET["product_id"];
        $product = producto_DAO::get_all_product_data_by_id($product_id);

        sessionController::save_product_cart($product);
        $cartCount = sessionController::cont_product_cart();
        $datos_carrito = sessionController::datos_carrito_resume();
        ob_clean();
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'cartCount' => $cartCount, 'subtotal' => $datos_carrito["subtotal"], "tax" => $datos_carrito["tax"], "total_tax" => $datos_carrito["total_tax"]]);
        exit;
    }
    public function del_cart(){
        sessionController::start_session();
        $product_id = $_GET["product_id"];
        sessionController::del_product_cart($product_id);
        $cartCount = sessionController::cont_product_cart();
        $datos_carrito = sessionController::datos_carrito_resume();
        
        ob_clean();
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'cartCount' => $cartCount, 'subtotal' => $datos_carrito["subtotal"], "tax" => $datos_carrito["tax"], "total_tax" => $datos_carrito["total_tax"]]);
        exit;
        // header("Location: ?controller=cart&action=resume");
        exit;
    }
    public function del_full_product_cart(){
        sessionController::start_session();
        $product_id = $_GET["product_id"];
        sessionController::del_full_product_cart($product_id);
        $datos_carrito = sessionController::datos_carrito_resume();
        $cartCount = sessionController::cont_product_cart();
        ob_clean();
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'cartCount' => $cartCount, 'subtotal' => $datos_carrito["subtotal"], "tax" => $datos_carrito["tax"], "total_tax" => $datos_carrito["total_tax"]]);
        exit;

    }
}