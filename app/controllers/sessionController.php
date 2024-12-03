<?php

class sessionController
{
    public static function protection_session()
    {
        session_start();

        if (!isset($_SESSION["email"])) {
            header("?controller=home&action=login");
        }
    }
    public static function start_session()
    {
        session_start();
        if (isset($_SESSION["email"])) {

        }
    }
    public static function set_session_data($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public static function get_session_data($key)
    {
        return $_SESSION[$key] ?? null;
    }
    public static function destroy_session()
    {
        // Revienta la session
        session_unset();
        session_destroy();
        // Elimina las cookies del navegador
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        header("Location: ?controller=home&action=home");
    }
    public static function save_product_cart($product)
    {
        if (isset($_SESSION["cart_products"])) {
            $existe=false;
            foreach ($_SESSION["cart_products"] as &$producto) {
                if ((int)$producto["product"][0]->getProduct_id() === (int)$product[0]->getProduct_id()){
                    if ($producto["cont"] >= 1) {
                        $producto["cont"]+=1;
                        $existe=true;
                        break;
                    }
                }
            }
            if ($existe == false) {
                $array_product=["cont"=>1, "product"=>$product];
                $_SESSION["cart_products"][]= $array_product;
            }
        } else {
            $_SESSION["cart_products"] = [];
            self::save_product_cart($product);
        }
        return $_SESSION["cart_products"];
    }
    public static function del_product_cart($product){
        // La propiedad & delante del $value hace que saa posible los cambios en el array
        foreach ($_SESSION["cart_products"] as $producto => &$value) {
            if ($value["product"][0]->getProduct_id() == $product) {
                if ($value["cont"] > 1){
                    $value["cont"]--;
                }else{
                    unset($_SESSION["cart_products"][$producto]);
                }
                break;
            }
        }
    }
    public static function del_full_product_cart($product){
        foreach ($_SESSION["cart_products"] as $producto => &$value) {
            if ($value["product"][0]->getProduct_id() == $product) {
                unset($_SESSION["cart_products"][$producto]);
                break;
            }
        }
    }
    public static function cont_product_cart(){
        $cont = 0;
        if (isset($_SESSION["cart_products"])){
            foreach($_SESSION["cart_products"] as $producto => $value){
                $cont += $value["cont"];
            }
        }
        return $cont;
    }
    public static function price_product_cart(){
        $prices_total=[
            "subtotal" => 0,
            "delivery" => 0,
            "tax" => 0,
            "total_imp" => 0
        ];
        $tax=21;
        foreach($_SESSION["cart_products"] as $product => $value){
            $prices_total["subtotal"] += $value["cont"] * $value["product"][0]->getPrice();
        }
        $prices_total["tax"] = round($prices_total["subtotal"] / 100 * $tax, 2);
        $prices_total["total_imp"] = round($prices_total["subtotal"] + $prices_total["tax"], 2);

        return $prices_total;
    }
    public static function find_product_cart($product_id){
        foreach($_SESSION["cart_products"] as $product => $value){
            if ($product_id == $value["product"][0]->getProduct_id){
                return true;
            }
        }
        return false;
    }
    public static function datos_carrito_resume(){
        self::start_session();
        $cart_productos = $_SESSION["cart_products"];
        $subtotal = 0;        
        foreach($cart_productos as $products => $value){
            $subtotal += $value["product"][0]->getPrice() * $value["cont"];
        }
        $tax = $subtotal/100*21;
        $total_tax = $subtotal + $tax;
        return [
            "subtotal" => round($subtotal, 2), 
            "tax" => round($tax, 2),
            "total_tax" => round($total_tax, 2)
        ];
    }
}