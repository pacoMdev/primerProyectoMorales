<?php
include_once("models/user_DAO.php");
class loginController{
    public function try_login(){
        if ($_POST["username"] && $_POST["password"]){
            $mail = $_POST["username"];
            $password = $_POST["password"];

            $listUsers = Users_DAO::get_all_user_data();
            foreach($listUsers as $user){
                if ((strcmp($user->getEmail, $mail)!==0) && strcmp($user->getPassword, $password)!==0){
                    session_start($user->getUser_id);

                    // crear una sesion con el user_id
                    header("?controller=home&action=home");
                }else{
                    header("?controller=home&action=login&err=1");                    
                }
            }

        }
    }
    public function try_register(){

    }
    public function destroy_session(){
        session_destroy();
    }
}