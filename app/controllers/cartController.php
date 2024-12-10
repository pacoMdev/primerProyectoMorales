<?php
include_once("controller/sessionController.php");
include_once("models/producto_DAO");
include_once("models/pedido_DAO.php");
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
    public function checkout(){
        sessionController::start_session();
        sessionController::protection_session();

        $contadorProductos = sessionController::cont_product_cart();
        $price_cart = sessionController::price_product_cart();
        $cart_products=$_SESSION["cart_products"];

        // Datos de relleno por session a form
        $name = (isset($_SESSION["name"])) ? $_SESSION["name"] : "";
        $surname = (isset($_SESSION["surname"])) ? $_SESSION["surname"] : "";
        $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : "";
        $phone = (isset($_SESSION["phone"])) ? $_SESSION["phone"] : "";
        $direccion = (isset($_SESSION["direccion"])) ? $_SESSION["direccion"] : "";
        $poblacion = (isset($_SESSION["poblacion"])) ? $_SESSION["poblacion"] : "";
        $ciudad = (isset($_SESSION["ciudad"])) ? $_SESSION["ciudad"] : "";

        include_once("views/checkout.php");
    }
    public function submit_cart_products(){
        sessionController::start_session();
        
        // Datos del formulario y de session
        $price_cart = sessionController::price_product_cart();
        $user_id = $_SESSION["user_id"];
        $subtotal = $price_cart["subtotal"];
        $tax = $price_cart["tax"];
        $total = $price_cart["total_imp"];
        // Datos form
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $address = $_POST["address"];
        $cod_postal = (int)$_POST["cod_postal"];
        $city = $_POST["city"];
        $phone = (int)$_POST["phone"];

        // crea pedido
        pedido_DAO::create_pedido($user_id, 99, $subtotal, $tax, $total, $name, $surname, $address, $cod_postal, $city, $phone);

        $last_pedido = pedido_DAO::get_last_pedido($user_id);
        $pedido_id = $last_pedido[0]->getPedido_id();
        // por cada producto del pedido lo inserta como producto pedido
        foreach($_SESSION["cart_products"] as $producto => $value){
            $producto_id = $value["product"][0]->getProduct_id();
            $cantidad = $value["cont"];
            $precio = $value["product"][0]->getPrice();
            $precio_total = $value["product"][0]->getPrice() * $value["cont"];
            pedido_DAO::add_pedido_producto($pedido_id, $producto_id, $cantidad, $precio, $precio_total);
        }
        unset($_SESSION["cart_products"]);
        // var_dump($last_pedido);
        header("Location: ?controller=cart&action=resume");
    }
}