<?php

class homeController{
    public function index(){
        include_once("views/main.php");
    }
    public function profile(){
        include_once("views/profile.php");
    }
    public function menu(){
        include_once("views/menu.php");
    }
}