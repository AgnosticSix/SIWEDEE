<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/SIWEDEE/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<img src="/SIWEDEE/Images/logoUPC.jpg" align="right" />

<title>Solicitud de Estancia</title>

</head>
<body> 
<?php
/*session_start();
if(!isset($_SESSION["usuario"]))
{
	header('Location: index.php');
	exit();
}*/
?>
<a href="logout.php" text-align="right">Cerrar Sesión</a>
	<fieldset>
		<legend>Subir Reporte</legend>
		</br >
	<form name="enviar_archivo_frm" method="post" action="uploadFile.php" enctype="multipart/form-data"> 
	<input type="file" name="archivo_fls"/>  
	</br>
	<input type="submit" name="subir_btn" value="Subir Archivo" /> 
	</fieldset>
</body>
</html>