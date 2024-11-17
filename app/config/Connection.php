<?php

class Database{
    public static function connect($host = '127.0.0.1', $user = 'root', $pass = 'root', $db = 'Tres_Tacos_DB'){
        try{
            $con = new mysqli($host, $user, $pass, $db);
            if ($con->connect_error) {
                // Deveria de redirigir a la pagina errorPage.php
                die("ERROR!!: No te puedes conectar " . $con->connect_error);

            } else {
                return $con;
            }
        }catch (mysqli_sql_exception){
            // header("Location: ../views/errorPage.php");
            header("Location: ".base_url."?controller=error&action=error500");
        }
    }
}