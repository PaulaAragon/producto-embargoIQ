<?php

require_once "models/camposM.php";

class InicioControlador{
    private $modelo;

    public function __CONSTRUCT(){
        // $this->modelo=new ConfigCliente();
        $this->modelo = new Campos();
    }

    public function Inicio(){
        
        // require_once "css/estilos.css";
        require_once "views/encabezado.php";
        require_once "views/inicio/principal.php";
        require_once "views/pie.php";
    }
}

?>