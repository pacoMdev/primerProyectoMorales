<?php
class errorController{
    public function error500(){
        $titleErrorTitle="Error 500 - Internal Server Error";
        $errorCode="500";
        $titleErrorCode="Internal Server Error";
        $descriptionError="Oops! Something went wrong on our end. <br>
            Please try again later or contact support if the issue persists.";

        include_once("views/errorPage.php");
    }
}