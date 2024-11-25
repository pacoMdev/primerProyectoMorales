<?php
include_once("models/Producto_DAO.php");
include_once("models/category_DAO.php");
include_once("models/sessionController");

class homeController{
    public function index(){
        sessionController::start_session();
        // $_SESSION["cart_products"]=[];
        if(!isset($_SESSION["cart_product"])){
            $_SESSION["cart_products"]=[];
        }
        $contadorProductos=count($_SESSION["cart_products"]);
        include_once("views/main.php");
    }
    public function profile(){
        include_once("views/profile.php");
    }
    public function login(){
        include_once("views/login.php");
    }
    public function register(){
        include_once("views/register.php");
    }
}