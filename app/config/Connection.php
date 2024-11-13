<?php

class Database
{
    public static function connect($host = 'localhost', $user = 'root', $pass = '', $db = 'test')
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