<?php
include_once("models/user_DAO.php");
include_once("models/User.php");
include_once("models/sessionController");

class loginController{
    public function try_login(){
        if ($_POST["username"] && $_POST["password"]){
            $mail = $_POST["username"];
            $password = $_POST["password"];

            $listUsers = Users_DAO::get_all_user_data();
            $noExiste=true;
            foreach($listUsers as $user){
                // cambio de verificacion de password normal a hash
                if ((strcmp($user->getEmail(), $mail)==0) && password_verify($password, $user->getPassword())==true){
                    // El usuario existe

                    // Crea una nueva session
                    session_start();
                    // asigna datos a la session
                    sessionController::set_session_data("user_id", $user->getUser_id());
                    sessionController::set_session_data("email", $user->getEmail());
                    sessionController::set_session_data("name", $user->getName());
                    sessionController::set_session_data("surname", $user->getSurname_1());

                    $noExiste=false;
                    header("Location: ?controller=home&action=home");
                }
            }
            if ($noExiste==true){
                // El usuario no existe
                header("Location: ?controller=home&action=login&err=1");
            }
        }
    }
    public function try_register(){
        if ($_POST["name"] && $_POST["surname"] && $_POST["email"] && $_POST["password"] && $_POST["confirm_password"]){

            // Recoleta los datos del formulario
            $name = $_POST["name"];
            $surname_1 = $_POST["surname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            $listaUsuarios = users_DAO::get_all_user_by_email($email);
            
            // Comprueva que existe el email (email es unico)
            if (count($listaUsuarios)==0){
                // comprueva de que las contraseñas son iguales
                if (strcmp($password, $confirm_password)==0){
                    $arrayUser = [
                        "email"=>$email,
                        "password"=>password_hash($password, PASSWORD_DEFAULT),
                        "name"=>$name,
                        "surname_1"=>$surname_1
                    ];
                    $user = new User();
                    $user->hydrate($arrayUser);
                    $datosGuardados = users_DAO::save_user_data($user);
    
                    // Redirije al login para iniciar sesion
                    header("Location: ?controller=home&action=login");
                }else{
                    // Las contraseñas no coinciden
                    header("Location: ?controller=home&action=register&err=2");
                }
            }else{
                // El usuario ya existe
                header("Location: ?controller=home&action=register&err=3");
            }

        }

    }
}