<?php
include_once("models/Producto_DAO.php");
include_once("models/category_DAO.php");

class homeController{
    public function index(){
        include_once("views/main.php");
    }
    public function profile(){
        include_once("views/profile.php");
    }
    public function login(){
        include_once("views/login.php");
    }
    public function register(){
        include_once("views/register.php");
    }
}