<?php

class DatosDemoController{

    public function index(){

        require_once "models/datosDemo.php";
        $datos = new DatosDemoModel();
        $data["titulo"] = "Datos";
        $data ["datos"] = $datos->get_datosDemo();

        require_once "views/ejemplo/ejemplo.php";
    }
    public function nuevo(){
        $data["titulo"] = "Datos";
        require_once "views/ejemplo/datosDemo_nuevo.php";
    }
}


?>