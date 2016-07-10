<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/SIWEDEE/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<img src="/SIWEDEE/Images/logoUPC.jpg" align="right" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
session_start();
if(!isset($_SESSION['usuario']))
{
	header('Location: index.php');
	exit();
}
?>
<body>
<?php
include("conexion.php");
		
		 $cd=$_SESSION["usuario"];
		$cn="SELECT * FROM usuarios WHERE USUARIO = '$cd'";
		$consultap=mysql_query($cn,$conexion);
		$ro=mysql_fetch_assoc($consultap);
		$ros = $ro["CVE_USUARIO"];
		
		$consulta="SELECT * FROM asignacion_empresa WHERE CVE_PERSONAS='$ros'";
		$consultapro=mysql_query($consulta,$conexion);
		
		if(mysql_num_rows($consultapro)>0){
			echo"<table border='1'><th>alumno</th><th>matricula</th><th>empresa</th><th>proceso</th>";
			while($row=mysql_fetch_assoc($consultapro)){
				//para que salga el nombre de la empresa y no su cve
				$nombreE =$row['CVE_EMPRESA'];
				$consulta2="SELECT * FROM empresa WHERE CVE_EMPRESA = '$nombreE' ";
				$consultapro2=mysql_query($consulta2,$conexion);
				$row2=mysql_fetch_assoc($consultapro2);
				//para que salga el nobre completo del alumno
				$nombreA =$row['CVE_ALUMNO'];
				$consulta3="SELECT * FROM personas WHERE CVE_PERSONA = '$nombreA' ";
				$consultapro3=mysql_query($consulta3,$conexion);
				$row3=mysql_fetch_assoc($consultapro3);
				$consulta5="SELECT * FROM alumnos WHERE CVE_ALUMNO = '$nombreA' ";
				$consultapro5=mysql_query($consulta5,$conexion);
				$row5=mysql_fetch_assoc($consultapro5);
				//nombre del proceso
				$nombreP =$row['CVE_PRO'];
				$consulta4="SELECT * FROM proceso WHERE CVE_PRO = '$nombreP' ";
				$consultapro4=mysql_query($consulta4,$conexion);
				$row4=mysql_fetch_assoc($consultapro4);
				echo '<tr><td>'.$row3['NOMBRE'].' '.$row3['APELLIDO_PAT'].' '.$row3['APELLIDO_MAT'].'</td>'.'<td>'.$row5['MATRICULA'].'<td>'.$row2['RAZON_SOCIAL'].'</td>'.'</td>'.'<td>'.$row4['NOMBRE'].'</td>'.'<td>'."<input type='submit' name='btn1' value='Evualuar'/>".'</td>';
			}
			echo "</table>";
		}
		else{
			?>
			<script languaje="javascript">
  alert("No tiene alumnos disponibles!");
  location.href = "index.php";
 </script>
          <?php  
		}
        ?>
        <input type='submit' name='asignar' value='Asignar'/>
        <input type='submit' name='asignar' value='Asignar'/>
</body>
</html>