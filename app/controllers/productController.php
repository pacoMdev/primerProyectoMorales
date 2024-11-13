<?php

include_once("models/Camiseta.php");
include_once("models/Camiseta_DAO.php");

class productoController{
    public function index(){
        include_once("views2/main.php");
    }
    public function profile(){
        include_once("views2/profile.php");
    }
    public function menu(){
        include_once("views2/menu.php");
    }
    public function resume(){
        // hay que modificar la tabla para añadir id

        header("Location:?controller=producto&action=index");

    }
}