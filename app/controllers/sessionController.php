<?php

class sessionController{
    public static function protection_session(){
        session_start();

        if(!isset($_SESSION["email"])){
            header("?controller=home&action=login");
        }
    }
    public static function start_session(){
        session_start();
        if (isset($_SESSION["email"])){

        }
    }
    public static function set_session_data($key, $value){
        $_SESSION[$key] = $value;
    }
    public static function get_session_data($key){
        return $_SESSION[$key] ?? null;
    }
    public static function destroy_session(){
        // Revienta la session
        session_unset();
        session_destroy();
        // Elimina las cookies del navegador
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        header("Location: ?controller=home&action=home");
    }
}