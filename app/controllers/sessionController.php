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
        // var_dump($_SESSION["cart_products"]);
        return $_SESSION["cart_products"];
    }
    public static function del_product_cart($product){
        foreach ($_SESSION["cart_products"] as &$producto) {
            if ($producto["product"][0]->getProduct_id() == $product) {
                if ($producto["cont"] > 1){
                    $producto["cont"]--;
                }else{
                    var_dump($producto);
                    // falla aqui --> se deve eliminar el array del array
                    unset($_SESSION["cart_products"][$producto]);
                }
                break;
            }
        }
    }
}