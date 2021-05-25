<?php
session_start();
class p
{
	public $server;
	public $usuario;
	public $password;
	public $basedatos;
	public $conn;

	public function p()
	{	
		$this->server="LocalHost";
		$this->usuario="root";
		$this->password="";
		$this->basedatos="mockups";	
	}
	public function conectar() 
	{	
	  $conn=mysqli_connect($this->server, $this->usuario, 
						  $this->password,$this->basedatos)   or die("error");
		if ($conn)
		{
			#echo "conexion exitosa"."<br>";	
		}
		else 
		{
			echo "algo salio mal"."<br>";
		}
		return $conn;
	}
}
?>