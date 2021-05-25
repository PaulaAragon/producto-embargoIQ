<?php

    class DatosDemoModel{
        private $db;
        private $datosDemo;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->datosDemo = array();
        }

        public function get_datosDemo(){
            $sql = "SELECT * FROM datosDemo";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->datosDemo[] = $row;
                
            }
            return $this->datosDemo;
        }
        public function insertar($departamento, $ciudad, $entidadRemitente, $direccion){
            $resultado = $this->db->query("INSERT INTO datosDemo (departamento, ciudad, 
            entidadRemitente, direccion) VALUES('$departamento', '$ciudad', '$entidadRemitente',
            '$direccion')");
        }
    }


?>