<?php
include_once("controller/sessionController.php");
include_once("models/producto_DAO");
include_once("models/pedido_DAO.php");
include_once("models/Promocion.php");
include_once("models/promocion_DAO.php");
include_once("../models/User_DAO.php");
class cartController
{
    public function resume()
    {
        sessionController::start_session();
        if (isset($_SESSION["cart_products"])) {
            $contadorProductos = sessionController::cont_product_cart();
            $price_cart = sessionController::price_product_cart();
            $cart_products = $_SESSION["cart_products"];
        } else {
            $contadorProductos = 0;
        }
        
        include_once("views/cart.php");
    }
    public function checkout()
    {
        sessionController::start_session();
        sessionController::protection_session();

        $contadorProductos = sessionController::cont_product_cart();
        $price_cart = sessionController::price_product_cart();
        $cart_products = $_SESSION["cart_products"];
        $cod_discount = isset($_SESSION["promotion_code"]) ? $_SESSION["promotion_code"]  : "";
        $percent_discount = isset($_SESSION["promotion_discount"]) ? $_SESSION["promotion_discount"]  : "0%";

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
    public function submit_cart_products()
    {
        sessionController::start_session();

        // Datos del formulario y de session
        $price_cart = sessionController::price_product_cart();
        $user_id = $_SESSION["user_id"];
        $promotion_id = $price_cart["promotion_id"];
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
        pedido_DAO::create_pedido($user_id, $promotion_id, $subtotal, $tax, $total, $name, $surname, $address, $cod_postal, $city, $phone);

        $last_pedido = pedido_DAO::get_last_pedido($user_id);
        $pedido_id = $last_pedido[0]->getPedido_id();
        // por cada producto del pedido lo inserta como producto pedido
        foreach ($_SESSION["cart_products"] as $producto => $value) {
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
    public function apply_discount()
    {
        $promotion_code = $_GET["promotion_code"];
        sessionController::start_session();
        // Obtiene todas las promociones de DB por promotion_code
        $all_promotion_code = promocion_DAO::get_all_data_promotion_by_code($promotion_code);
        if (count($all_promotion_code) == 1) {
            // añade datos de promocion a session
            sessionController::set_session_data("promotion_code", $all_promotion_code[0]->getPromotion_code());
            sessionController::set_session_data("promotion_discount", $all_promotion_code[0]->getPorcentaje());
            sessionController::set_session_data("promotion_id", $all_promotion_code[0]->getPromotion_id());
            
            $data = [
                "success" => true,
                "promotion_code" => "",
                "porcentaje" => "",
                "subtotal" => 0,
                "tax" => 0,
                "total_tax_discount" => 0
            ];

            $tax = 21;
            foreach ($_SESSION["cart_products"] as $product => $value) {
                $data["subtotal"] += $value["cont"] * $value["product"][0]->getPrice();
            }
            $data["promotion_code"]=$all_promotion_code[0]->getPromotion_code();
            $data["porcentaje"] = $all_promotion_code[0]->getPorcentaje();
            $data["tax"] = round($data["subtotal"] / 100 * $tax, 2);
            $total_tax = round($data["subtotal"] + $data["tax"], 2);
            // lo deja con el descuento aplicado
            $data["total_tax_discount"] = round($total_tax - ($total_tax / 100 * intval($data["porcentaje"])), 2);

            ob_clean();
            header('Content-Type: application/json');
            echo json_encode(['success' => true, "promotion_code" => $data["promotion_code"], "porcentaje" => $data["porcentaje"], 'subtotal' => $data["subtotal"], "tax" => $data["tax"], "total_tax_discount" => $data["total_tax_discount"]]);
            exit;
        }
    }
}
