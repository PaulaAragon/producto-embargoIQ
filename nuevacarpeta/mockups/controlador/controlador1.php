       <?php
require ("../modelo/DAO.php");
require ("../modelo/modelo.php");


if (isset ($_POST['op1']))	
{ 
$U=$_POST["u"];
$C=$_POST["c"];

$mod1= new modelo1($U,$C);

$l= new DAO();
$l->Login($U,$C);
}
else 
{  
	if(isset($_POST['op2']))

	{
		
		$d= $_POST["d"];
		$r=$_POST["r"];
		$n=$_POST["n"];
		$a=$_POST["a"];
		$u=$_POST["u"];
		$c=$_POST["c"];
		$rc=$_POST["rc"];
		
		
		if ($c==$rc)
		{
			echo "contraseña igual";
			
		require_once("../modelo/modelo.php");
		$mod1 = new modelo2($d,$r,$n,$a,$u,$c);
		require_once( "../modelo/DAO.php");
		
		
		$l= new DAO();
		$l-> Insertar($d,$r,$n,$a,$u,$c);
		}
		else
		{
			echo"contraseñas diferentes";
		}
		
		
		
		
		
	}
	else
	{
		if(isset($_POST["op4"]))
		{
			$a= $_POST["Select_nombre"];
			echo $a;
		}
	}
	
	
}



?> 