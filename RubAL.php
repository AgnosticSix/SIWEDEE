<html>
<head>
<link href="/SIWEDEE/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<img src="/SIWEDEE/Images/logoUPC.jpg" align="right" />

<title>Rubrica</title>
<body>
<?php
session_start();
if(!isset($_SESSION["usuario"]))
{
	header('Location: index.php');
	exit();
}
?>
<a href="logout.php" text-align="right">Cerrar Sesión</a>
<fieldset>
<table width="500" height="350">
    	<tr>
        	<td colspan="2"><h2><center>
        	Rubrica Asesor Laboral
        	</center></h2></td>
        </tr>
        <tr>
        <tr>
        	<td width="500"><h3><center>
        	Evaluacion del desempe&ntilde;o
        	</center></h3></td>
        </tr>
        	<td width="344">Responsabilidad.</td>
            <td width="144">
<select name="Responsabilidad">
<option value="C01">0</option>
<option value="C05">5</option>
<option value="C010">10</option>
</select>
		</td>
        </tr>
        <tr>
        	<td>Trabajo de Equipo.</td>
            <td><select name="Trabajo de Equipo">
<option value="C01">0</option>
<option value="C05">5</option>
<option value="C010">10</option>
</select>
		</td>
        </tr>
       	<tr>
        	<td>Asistencia y Puntualidad.</td>
            <td><select name="Asistencia y Puntualidad">
<option value="C01">0</option>
<option value="C05">5</option>
<option value="C010">10</option>
</select>
		</td>
        </tr>
		<tr>
        	<td><h3><center>Conocimiento</center></h3></td>
		</tr>
        <tr>
        	<td>Habilidad para solucionar problemas.</td>
            <td><select name="Habilidad para solucionar problemas">
<option value="C01">0</option>
<option value="C03">3</option>
<option value="C05">5</option>
</select></td>
        </tr>
        <tr>
        	<td>Manejo de herramientas de su área de trabajo.</td>
            <td><select name="Manejo de herramientas de su área de trabajo">
<option value="C01">0</option>
<option value="C05">5</option>
<option value="C010">10</option>
</select></td>
        </tr>
		<tr>
        	<td><h3><center>Actitud</center></h3></td>
		</tr>
        <tr>
        	<td>Disponibilidad.</td>
            <td><select name="Disponibilidad">
<option value="C01">0</option>
<option value="C03">3</option>
<option value="C05">5</option>
</select></td>
        </tr>
		<tr>
        	<td>Respeto.</td>
            <td><select name="Respeto">
<option value="C01">0</option>
<option value="C03">3</option>
<option value="C05">5</option>
</select></td>
        </tr>
		<tr>
        	<td>Imagen personal.</td>
            <td><select name="Imagen personal">
<option value="C01">0</option>
<option value="C03">3</option>
<option value="C05">5</option>
</select></td>
        </tr>
        
        
    </table> 
    <br/>
    <input type="submit" name="update_btn" value="Subir Calificaci&oacute;n"/>
	</fieldset>
</body>
</head>
</html>