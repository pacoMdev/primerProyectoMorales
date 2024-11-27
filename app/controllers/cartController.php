<?php
include_once("controller/sessionController.php");
class cartController{
    public function resume(){
        sessionController::start_session();
        if (isset($_SESSION["cart_products"])){
            $contadorProductos = sessionController::cont_product_cart();
            $price_cart = sessionController::price_product_cart();
            $cart_products=$_SESSION["cart_products"];
        }else{
            $contadorProductos=0;
        }
        include_once("views/cart.php");
    }
}