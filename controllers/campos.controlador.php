<?php

require_once "models/camposM.php";

class CamposControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Campos();
    }

    public function Inicio(){
        
            require_once "views/encabezado.php";
            require_once "views/campos/index.php";
            require_once "views/pie.php";
    }

    public function FormCrearCampos(){
        $tituloCampos="Registrar";
        $p=new Campos();
        if(isset($_GET['idCllave'])){
            $p=$this->modelo->ObtenerCampos($_GET['idCllave']);
            $tituloCampos="Modificar";
        }

        require_once "views/encabezado.php";
        require_once "views/campos/formCampos.php";
        require_once "views/pie.php";        
    }

    public function GuardarCampos(){
        $p=new Campos();
        $p->setidCllave(intval($_POST['idCllave']));
        $p->setfechaGen($_POST['fgo']);
        $p->setnOfiCoactivos($_POST['noc']);
        $p->setnProJudicial($_POST['npj']);
        $p->setnCuentaJudicial($_POST['ncj']);  
        

        $p->getidCllave()  > 0 ?
        $this->modelo->ActualizarCampos($p) :
        $this->modelo->InsertarCampos($p);

        header("location:?c=campos");

    }

    public function Borrar(){
        $this->modelo->EliminarCampos($_GET["idCllave"]);
        header("location:?c=campos");
    }
}