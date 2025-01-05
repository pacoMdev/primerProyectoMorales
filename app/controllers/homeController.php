<?php
include_once("models/Producto_DAO.php");
include_once("models/category_DAO.php");
include_once("../models/User_DAO.php");
include_once("../models/promocion_DAO.php");
include_once("models/sessionController");

class homeController{
    public function index(){
        sessionController::start_session();
        // $_SESSION["cart_products"]=[];
        // if(!isset($_SESSION["cart_product"])){
        //     $_SESSION["cart_products"]=[];
        // }
        sessionController::start_session();
        $contadorProductos = sessionController::cont_product_cart();

        $data3Promotion = promocion_DAO::get_3_promotions_data();
        // 
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