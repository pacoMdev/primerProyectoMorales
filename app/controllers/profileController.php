<?php
include_once("../controller/sessionController.php");
include_once("../models/User.php");

class profileController{
    public function show_profile(){
        sessionController::protection_session();
        $contadorProductos=count($_SESSION["cart_products"]);
        include_once("views/profile.php");
    }
    public function update_data(){
        if (isset($_POST["email"])){

        }
    }
}