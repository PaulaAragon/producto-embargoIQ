<?php

class ConfigCliente{
    private $pdo; // VA A TENER EL OBJETO DE CONEXION

    private $idConfigC;
    private $nombreCliente;
    private $cantC;
    private $imagenCliente;
    

    public function __CONSTRUCT(){
        $this->pdo = BaseDatos::Conectar();
    }

    public function getIdConfigC() : ?int{
        return $this->idConfigC;
    }

    public function setIdConfigC(int $id){
        $this->idConfigC=$id;
    }

    public function getnombreCliente() : ?string{
        return $this->nombreCliente;
    }
    
    public function setnombreCliente(string $nom){
        $this->nombreCliente=$nom;
    }

    public function getcantC() : ?int{
        return $this->cantC;
    }

    public function setcantC(int $can){
        $this->cantC=$can;
    }

    public function getimagenCliente() : ?longblob{
        return $this->nombreCliente;
    }
    
    public function setimagenCliente(longblob $img){
        $this->imagenCliente=$img;
    }


    public function Cantidad(){
        try {
            $consulta=$this->pdo->prepare("SELECT SUM(cantC)as Cantidad FROM configcliente;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }
    public function Listar(){
        try {
            $consulta=$this->pdo->prepare("SELECT * FROM configcliente;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try {
            $consulta=$this->pdo->prepare("SELECT * FROM configcliente WHERE idConfigC=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new ConfigCliente();
            $p->setIdConfigC($r->idConfigC);
            $p->setnombreCliente($r->nombreCliente);
            // $p->setcantC($r->cantC);

            return $p;

        }catch(Exception $e) {
            die($e->getMessage());
        }
    }


    public function Insertar(configCliente $p){
        try {
            $consulta="INSERT INTO configcliente(nombreCliente,cantC) VALUES(?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p->getnombreCliente(),
                        $p->getcantC()
                    ));            
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(configCliente $p){
        try {
            $consulta="UPDATE configcliente SET 
                nombreCliente=?,
                cantC=?
                WHERE idConfigC=?;
            ";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p->getnombreCliente(),
                        $p->getcantC(),
                        $p->getIdConfigC()
                    ));            
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id){
        try {
            $consulta="DELETE FROM configcliente WHERE idConfigC=?;";
            $this->pdo->prepare($consulta)
                    ->execute(array($id));            
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }
    

}