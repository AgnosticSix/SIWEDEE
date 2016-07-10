<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/SIWEDEE/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<img src="/SIWEDEE/Images/logoUPC.jpg" align="right" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asignacion</title>



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
		$usu= $_SESSION['usuario'];
		include("conexion.php");
		$consu="SELECT * FROM usuarios WHERE USUARIO = '$usu' ";
		$consr=mysql_query($consu,$conexion);
		$ra=mysql_fetch_assoc($consr);
		$usa=$ra["CVE_USUARIO"];
		$consul="SELECT * FROM maestros WHERE CVE_PERSONAS='$usa'";
		$consultapr=mysql_query($consul,$conexion);
		$r=mysql_fetch_assoc($consultapr);
		$o=$r["CVE_CARRERA"];
		
		$consulta='SELECT * FROM asignacion_empresa';
		$consultapro=mysql_query($consulta,$conexion);
		
		if(mysql_num_rows($consultapro)>0){
			echo"<table border='1'><th>Alumno</th><th>Matricula</th><th>Empresa</th><th>Proceso</th><th>Acesor Academico</th>";
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
				$com = $row5["CVE_CARRERA"];
				
				//nombre del proceso
				$nombreP =$row['CVE_PRO'];
				$consulta4="SELECT * FROM proceso WHERE CVE_PRO = '$nombreP' ";
				$consultapro4=mysql_query($consulta4,$conexion);
				$row4=mysql_fetch_assoc($consultapro4);
				//maestro
				$consulta7 ="SELECT NOMBRE,APELLIDO_PAT,APELLIDO_MAT FROM personas WHERE CVE_TIPOPERSONA = 2";
				$nombreM =$row['CVE_PERSONAS'];
				$consulta6="SELECT * FROM personas WHERE CVE_PERSONA = '$nombreM' ";
				$consultapro6=mysql_query($consulta6,$conexion);
				$row6=mysql_fetch_assoc($consultapro6);
				$result=mysql_query($consulta7); 
				$i=0;
				if($o==$com){
				echo '<tr><td>'.$row3['NOMBRE'].' '.$row3['APELLIDO_PAT'].' '.$row3['APELLIDO_MAT'].'</td>'.'<td>'.$row5['MATRICULA'].'<td>'.$row2['RAZON_SOCIAL'].'</td>'.'</td>'.'<td>'.$row4['NOMBRE'].'</td>'.'<td>'.
                "<select name='proceso'>";
                while ($row7=mysql_fetch_row($result)) 
                    { 
                       echo "<option value=".$row7[$i]." ".$row7[1]." ".$row7[2].">".$row7[$i]." ".$row7[1]." ".$row7[2]."</option>"; 
                    } 

                "</select>". '</td>';
				}
			}
			
			echo "</table>";
			
		}
		else{
			echo'<h1>No se encontro</h1>';
		}

	?>
</body>
</html>