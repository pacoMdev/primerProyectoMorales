<?php
include_once("controller/sessionController.php");
class errorController{
    public function error500(){
        $contadorProductos = sessionController::cont_product_cart();
        $titleErrorTitle="Error 500 - Internal Server Error";
        $errorCode="500";
        $titleErrorCode="Internal Server Error";
        $descriptionError="Oops! Something went wrong on our end. <br>
            Please try again later or contact support if the issue persists.";

        include_once("views/errorPage.php");
    }
    public function error404Controller(){
        $contadorProductos = sessionController::cont_product_cart();
        $titleErrorTitle="Error 404 - Not Found";
        $errorCode="404";
        $titleErrorCode="Not Found";
        $errorController = $_GET["controllerName"];
        $descriptionError="El controlador solicitado (" . $errorController . ") no se ha encontrado en el servidor. <br>
            Es posible que la URL esté mal escrita o que el controlador no exista.";

        include_once("views/errorPage.php");
    }
}