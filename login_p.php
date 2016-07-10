<?php

	include("conexion.php");
	$nombre=$_POST['username'];
	$pwsd=$_POST['password'];
	
	$consulta="SELECT * FROM usuarios WHERE USUARIO= '$nombre' AND PASSWORD= '$pwsd'";	
	$consultapro=mysql_query($consulta,$conexion);
	
	$row = mysql_fetch_assoc($consultapro);
	$cve= $row["CVE_USUARIO"];
	echo $cve;
	$con="SELECT * FROM personas WHERE CVE_PERSONA='$cve'";
	$consultapro2=mysql_query($con,$conexion);
	$row2 = mysql_fetch_assoc($consultapro2);
	$r=$row2["CVE_TIPOPERSONA"];
	echo $r;
	
	if($row==true && $r==1){
		session_start();
			$_SESSION["usuario"] = $nombre;
			header("Location: Asignacion.php");
	}
	else
	if($row==true & $r==2){
		session_start();
				$_SESSION["usuario"] = $nombre;
				header("Location: AsignacionAca.php");
	}
	else
	if($row==true & $r==3){
		session_start();
			$_SESSION["usuario"] = $nombre;
			header("Location: ALumnoIndex.php");
	}
	else
	if($row==true & $r==4){
		session_start();
			$_SESSION["usuario"] = $nombre;
			header("Location: vinculacion.php");
	}
	else
	if($row==true & $r==5){
		session_start();
							$_SESSION["usuario"] = $nombre;
							header("Location: RubAL.php");
	}
	else
{
?>
<script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "index.php";
 </script>
<?php
}
?>