<?php

class Campos{

    private $pdo;

    private $idCllave;
    private $fechaGen;
    private $nOfiCoactivos;
    private $nProJudicial;
    private $nCuentaJudicial;


    public function __CONSTRUCT(){
        $this->pdo = BaseDatos::Conectar();
    }

    //Get y Set de CAMPOS LLAVE-Prueba

    public function getidCllave() : ?int{
        return $this->idCllave;
    }
    public function setidCllave(int $idCllave){
        $this->idCllave=$idCllave;
    }

    public function getfechaGen() {
        return $this->fechaGen;
    }
    public function setfechaGen( $fechaGen){
        $this->fechaGen=$fechaGen;
    }

    public function getnOfiCoactivos() : ?int{
        return $this->nOfiCoactivos;
    }
    public function setnOfiCoactivos(int $nOfiCoactivos){
        $this->nOfiCoactivos=$nOfiCoactivos;
    }
    public function getnProJudicial() : ?int{
        return $this->nProJudicial;
    }
    public function setnProJudicial(int $nProJudicial){
        $this->nProJudicial=$nProJudicial;
    }

    public function getnCuentaJudicial() : ?int{
        return $this->nCuentaJudicial;
    }
    public function setnCuentaJudicial(int $nCuentaJudicial){
        $this->nCuentaJudicial=$nCuentaJudicial;
    }

    //
    public function CantidadCampos(){
    try {
        $consulta=$this->pdo->prepare("SELECT SUM(idCllave) as Cantidad FROM camposllave;");
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_OBJ);
    }catch(Exception $e) {
        die($e->getMessage());
        }
    }

    public function ListarCampos(){
        try {
            $consulta=$this->pdo->prepare("SELECT * FROM camposllave;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function InsertarCampos(Campos $p){
        try {
            $consulta="INSERT INTO camposllave(fechaGen,nOfiCoactivos,
            nProJudicial,nCuentaJudicial)  VALUES(?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p->getfechaGen(),
                        $p->getnOfiCoactivos(),
                        $p->getnProJudicial(),
                        $p->getnCuentaJudicial()
                    ));            
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerCampos($idCllave){
        try {
            $consulta=$this->pdo->prepare("SELECT * FROM camposllave WHERE idCllave=?;");
            $consulta->execute(array($idCllave));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Campos();
            $p->setidCllave($r->idCllave);
            $p->setfechaGen($r->fechaGen);
            $p->setnOfiCoactivos($r->nOfiCoactivos);
            $p->setnProJudicial($r->nProJudicial);
            $p->setnCuentaJudicial($r->nCuentaJudicial);

            return $p;

        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function ActualizarCampos(Campos $p){
        try {
            $consulta="UPDATE camposllave SET 
            fechaGen=?,
            nOfiCoactivos=?,
            nProJudicial=?,
            nCuentaJudicial=? 
            WHERE  idCllave=?;
            ";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p->getfechaGen(),
                        $p->getnOfiCoactivos(),
                        $p->getnProJudicial(),
                        $p->getnCuentaJudicial(),
                        $p->getidCllave()
                    ));            
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function EliminarCampos($idCllave){
        try {
            $consulta="DELETE FROM camposllave WHERE idCllave=?;";
            $this->pdo->prepare($consulta)
                    ->execute(array($idCllave));            
        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

}



?>