<?php

include_once("models/Camiseta.php");
include_once("models/Camiseta_DAO.php");

class productoController{
    public function index(){
        $view = "views/productos/listado.php";
        include_once("views/main.php");
    }
    public function show(){
        include_once("views/productos/show.php");
    }
    public function create(){
        include_once("views/productos/create.php");
    }
    public function destroy(){
        // hay que modificar la tabla para añadir id

        header("Location:?controller=producto&action=index");

    }
    public function store(){
        // include_once("models/Camiseta_DAO.php");

        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $talla = $_POST["talla"];
        $precio = $_POST["precio"];

        header("Location:?controller=producto&action=index");
    }
    
}