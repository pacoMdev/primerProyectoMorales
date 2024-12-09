<?php
include_once("../controller/sessionController.php");
include_once("../models/pedido_DAO.php");
include_once("../models/User.php");

class profileController{
    public function show_profile(){
        sessionController::protection_session();
        $contadorProductos = sessionController::cont_product_cart();
        include_once("views/profile.php");
    }
    public function contacta(){
        sessionController::protection_session();
        $contadorProductos = sessionController::cont_product_cart();
        include_once("views/profile_contacta.php");
    }
    public function show_history_order(){
        sessionController::protection_session();
        $contadorProductos = sessionController::cont_product_cart();
        $user_id = $_SESSION["user_id"];
        $data_history = pedido_DAO::get_pedidos_by_id($user_id);

        include_once("views/history_order.php");
    }
    public function update_data(){
        if (isset($_POST["email"])){

        }
    }
}