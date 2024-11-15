<?php

include_once("models/Producto.php");
include_once("models/Producto_DAO.php");

class productoController{
    public function menu(){
        
        $listProducts=producto_DAO::get_all_product_data();
        include_once("views/menu.php");
    }
    public function resume(){
        // hay que modificar la tabla para añadir id

        header("Location:?controller=producto&action=index");

    }
}