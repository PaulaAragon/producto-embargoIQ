<?php
require_once("../modelo/DAO.php");
require_once("../modelo/modelo.php");
 
if(isset($_POST['op1']))
{			
	$D=$_POST["d"];			
	$N=$_POST["n"];
	$A=$_POST["a"];
	$U=$_POST["u"];
	$C=$_POST["c"];
	$T=$_POST["t"];
	$R=$_POST["r"];	
	$RC=$_POST["rc"];

	if($RC==$C)
	{	#$C=md5('$C1');
	 
			require_once("../modelo/modelo.php");

				$mod_per = new modelo2($D,$N,$A,$U,$C,$T,$R);
		
			require_once("../modelo/DAO.php");
		
				$l=new DAO1();
				$l->Insertar($D,$N,$A,$U,$C,$T,$R);	
					
	}
	else
	{
	
			function alerta()
				{
					alert("Contraseñas Diferentes");
				}
			
		
	}

}
else 
{ 
	
	if(isset($_POST['op2']))
	   {
					
			$u1=$_POST["u"];
			$c1=$_POST["c"];
						
			
				#$c1=md5('$c2')	;
				//echo "<br>".$c1."<br>".$u1;
									
			require_once "../modelo/modelo.php";
			$mod_per = new modelo1 ($u1,$c1);

			require_once("../modelo/DAO.php");

			$l=new DAO();
			$l->Login($u1,$c1);
							
			
	   }
	else
	{
		if(isset($_POST['op3']))
		{
			
			$cedula11=$_POST["cedula"];										require_once("../modelo/modelo.php");
										
			$M = new Modelo3($cedula11);

			require_once("../modelo/DAO.php");

			$l=new DAO();
			$l->Actualizar($cedula11);
				
			
		}
	else
		{
			if(isset($_POST['op4']))
			{
				
					
			
			}
			else
			{
				if(isset($_POST['op5']))
				{

					$ic1=$_POST["ic"];
					require_once "../modelo/modelo.php";
					$mod_per = new modelo_b2 ($ic1);

					require_once("../modelo/DAO.php");

						$l=new DAO();
					   $l->Eliminar($ic1);
					
				}
				else{
					if(isset($_POST['op6']))
					{
						require_once("../modelo/DAO.php");
							$l=new DAO();
		   					$l->Listar();
						
					}
					else
					{
						if(isset($_POST['op7']))
						{
							
										$A2=$_POST["a1"];
										$A1=$_POST["a"];
										$B1=$_POST["b"];
										$C1=$_POST["c"];
										$D1=$_POST["d"];
										$E1=$_POST["e"];
										$F1=$_POST["f"];
										$G1=$_POST["g"];
										$H1=$_POST["h"];
										$I1=$_POST["i"];
										$J1=$_POST["j"];
										$K1=$_POST["k"];
										$L1=$_POST["l"];
										$M1=$_POST["m"];
										$N1=$_POST["n1"];
										$N2=$_POST["n2"];
										$O1=$_POST["o"];
										$P1=$_POST["p"];
										$Q1=$_POST["q"];
										$R1=$_POST["r"];
										$S1=$_POST["s"];
										$T1=$_POST["t"];
										$U1=$_POST["u"];
										$V1=$_POST["v"];
										$W1=$_POST["w"];
										$X1=$_POST["x"];
										$Y1=$_POST["y"];
										$Z1=$_POST["z"];
										
										 require_once("../modelo/modelo.php");
										
										$M = new Modelo4($A2,$A1,$B1,$C1,$D1,$E1,$F1,$G1,$H1,$I1,$J1,$K1,$L1,$M1,$N1,$N2,$O1,$P1,$Q1,$R1,$S1,$T1,$U1,$V1,$W1,$X1,$Y1,$Z1);
										
										require_once("../modelo/DAO.php");
										
										$l= new DAO();
										$l-> modificar1($A2,$A1,$B1,$C1,$D1,$E1,$F1,$G1,$H1,$I1,$J1,$K1,$L1,$M1,$N1,$N2,$O1,$P1,$Q1,$R1,$S1,$T1,$U1,$V1,$W1,$X1,$Y1,$Z1);
									
									

							
						
					}
						else
						{
							if(isset($_POST['op8']))
							{
								header("location:../vista/recuperacioncontraseña2.php");
							}
							else {
									if(isset($_POST['op9']))
									{
										$A2=$_POST["a1"];
										$A1=$_POST["a"];
										$B1=$_POST["b"];
										$C1=$_POST["c"];
										$D1=$_POST["d"];
										$E1=$_POST["e"];
										$F1=$_POST["f"];
										$G1=$_POST["g"];
										$H1=$_POST["h"];
										$I1=$_POST["i"];
										$J1=$_POST["j"];
										$K1=$_POST["k"];
										$L1=$_POST["l"];
										$M1=$_POST["m"];
										$N1=$_POST["n1"];
										$N2=$_POST["n2"];
										$O1=$_POST["o"];
										$P1=$_POST["p"];
										$Q1=$_POST["q"];
										$R1=$_POST["r"];
										$S1=$_POST["s"];
										$T1=$_POST["t"];
										$U1=$_POST["u"];
										$V1=$_POST["v"];
										$W1=$_POST["w"];
										$X1=$_POST["x"];
										$Y1=$_POST["y"];
										$Z1=$_POST["z"];
										
										 require_once("../modelo/modelo.php");
										
										$M = new Modelo4($A2,$A1,$B1,$C1,$D1,$E1,$F1,$G1,$H1,$I1,$J1,$K1,$L1,$M1,$N1,$N2,$O1,$P1,$Q1,$R1,$S1,$T1,$U1,$V1,$W1,$X1,$Y1,$Z1);
										
										require_once("../modelo/DAO.php");
										
										$l= new DAO();
										$l-> modificar($A2,$A1,$B1,$C1,$D1,$E1,$F1,$G1,$H1,$I1,$J1,$K1,$L1,$M1,$N1,$N2,$O1,$P1,$Q1,$R1,$S1,$T1,$U1,$V1,$W1,$X1,$Y1,$Z1);
									
									}
								else 
								{}
							}				
						}
					}
				}
			}
			
			
		
	}
	   

}
}
?>&nbsp;