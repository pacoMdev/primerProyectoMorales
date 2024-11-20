<?php
include_once("../controller/sessionController.php");

class profileController{
    public function show_profile(){
        sessionController::protection_session();
        include_once("views/profile.php");
    }

}