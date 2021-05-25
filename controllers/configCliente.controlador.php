<?php 

require_once "models/configClienteM.php";

class ConfigClienteControlador{
    
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new ConfigCliente;
    }

    public function Inicio(){
        require_once "views/encabezado.php";
        require_once "views/clientes/index.php";
        require_once "views/pie.php";
    }

    public function FormCrear(){
        $titulo = "Registrar";
        $p=new ConfigCliente();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo="Modificar";
        }
        require_once "views/encabezado.php";
        require_once "views/clientes/form.php";
        require_once "views/pie.php";        
    }

    public function Guardar(){
        $p=new ConfigCliente();
        $p->setIdConfigC(intval($_POST['idConfigC']));
        $p->setnombreCliente($_POST['Nombre']);
        $p->setcantC($_POST['Cantidad']);
        // $p->setimagenCliente($_POST['imagenCliente']);

        $p->getIdConfigC() > 0 ?
        $this->modelo->Actualizar($p) :
        $this->modelo->Insertar($p);

        header("location:?c=configCliente");
    }
    public function Borrar(){
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=configCliente");
    }
} 