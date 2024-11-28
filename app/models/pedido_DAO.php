<?php

include_once("config/Connection.php");
include_once("models/Pedido.php");
class pedido_DAO{

    public static function create_pedido($user_id, $discount_id, $subtotal, $tax, $total){
        $conn = Database::connect();

        $sentenciaSQL="INSERT INTO pedido (cliente_id, metodo_envio, estado, date_creation, discount_id, subtotal, tax, price_total) VALUES (?, 'en tienda', 'en proceso', NOW(), ?, ?, ?, ?)";
        $stmtm = $conn->prepare($sentenciaSQL);

        $stmtm->bind_param("iiddd", $user_id, $discount_id, $subtotal, $tax, $total);
        $stmtm->execute();
        $conn->close();
        // return $pedido_id;
    }
    public static function get_last_pedido($user_id){
        $conn = Database::connect();
        // MODIFICAR PARA RECOJER EL ULTIMO PEDIDO
        $sentenciaSQL="SELECT * FROM pedido  WHERE cliente_id=$user_id ORDER BY pedido_id DESC LIMIT 1";
        $stmtm = $conn->prepare($sentenciaSQL);
        $stmtm->execute();
        $resultado=$stmtm->get_result();
        $pedidoProduct=[];
        while ($row = $resultado->fetch_object("Pedido")) {
            array_push($pedidoProduct, $row);
        }
        $conn->close();
        return $pedidoProduct ;
    }
    public static function add_pedido_producto($pedido_id, $producto_id, $cantidad, $precio, $precio_total){
        $conn = Database::connect();

        $sentenciaSQL="INSERT INTO pedidoProducto (pedido_id, producto_id, cantidad, precio, precio_total) VALUES (?, ?, ?, ?, ?)";
        $stmtm = $conn->prepare($sentenciaSQL);

        $stmtm->bind_param("iiidd", $pedido_id, $producto_id, $cantidad, $precio, $precio_total);
        $stmtm->execute();
        $conn->close();
    }
}