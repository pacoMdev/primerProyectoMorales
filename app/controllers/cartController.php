<?php
include_once("controller/sessionController.php");
class cartController{
    public function resume(){
        sessionController::start_session();
        if (isset($_SESSION["cart_products"])){
            $contadorProductos=count($_SESSION["cart_products"]);
            $cart_products=$_SESSION["cart_products"];
        }else{
            $contadorProductos=0;
        }
        include_once("views/cart.php");
    }
}