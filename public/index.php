<?php
include_once("../app/controllers/homeController.php");
include_once("../app/config/parameters.php");


if (!isset($_GET["controller"])){
    echo "No existe url de controller";
    header("Location: " . base_url . "?controller=".default_controller."&action=index");

}else{
    $nombre_controller = $_GET["controller"]."controller";

    if (class_exists($nombre_controller)){
        $controller = new $nombre_controller();

        if (isset($_GET["action"]) && method_exists($controller, $_GET["action"])){

            $action = $_GET["action"];
        }else{
            $action = default_action;
        }
        $controller->$action();
    }else{
        echo "no existe el controlador -> " . $nombre_controller;
    }
}
?>