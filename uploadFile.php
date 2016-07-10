<?php	
	$archivo = $_FILES["archivo_fls"]["tmp_name"];
	$destino = "archivos/".$_FILES["archivo_fls"]["name"];
	
	if($_FILES["archivo_fls"]["type"]=="text/plain")
	{
		move_uploaded_file($archivo,$destino);
		echo "Archivo subido :)<br /><a href=\"FormEstancia.php\">Regresar</a>";
	}
	else
	{
		echo "Solo se admiten archivos de texto plano<br /><a href=\"FormEstancia.php\">Regresar</a>";
	}
	
?>