<?php

class Database
{
    public static function connect($host = '127.0.0.1', $user = 'root', $pass = 'root', $db = 'Tres_Tacos_DB')
    {
        $con = new mysqli($host, $user, $pass, $db);

        if ($con->connect_error) {
            // Deveria de redirigir a la pagina errorPage.php
            header("Location: /project-TresTacos/app/views/errorPage.php");
            die("ERROR!!: No te puedes conectar " . $con->connect_error);

        } else {

            return $con;
        }
    }


}