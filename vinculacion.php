<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/SIWEDEE/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<img src="/SIWEDEE/Images/logoUPC.jpg" align="right" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


<body>
</fieldset>
<?php


include("conexion.php");
		$consulta='SELECT * FROM alumno';
		$consulta2 ='SELECT * FROM proceso';
		$consulta3 ='SELECT * FROM empresa';
		$consultapro=mysql_query($consulta,$conexion);
		$consultapro2=mysql_query($consulta2,$conexion);
		$consultapro3=mysql_query($consulta3,$conexion);
		$result2=mysql_query($consulta3); 
		$result=mysql_query($consulta2); 
				$i=1;
?>
<h1>BIENVENIDO</h1>
<form action="ActualizarVin.php" method"post">
<table>
    	<tr>
        	<td colspan="2">. . . </td>
        </tr>
        <tr>
        	
        </tr>
        <tr>
        <td>Matricula</td>
            <td><input type="text" name="txt_dire" />
                 </td>
        	
        </tr>
       	<tr>
        	<td>Nombre del alumno</td>
            <td><input type="text" name="txt_nom" />
              <input type="text" name="txt_apP" />
              <input type="text" name="txt_apM" /></td>
        </tr>
        <tr>
        	<td>Proceso</td>
            <td><select name="proceso">
            <?php
                	while ($row7=mysql_fetch_row($result)) 
{ 
echo "<option value=".$row7[$i].">".$row7[$i]."</option>\n"; 
} 
?>
                </select></td>
        </tr>
        <tr>
        	<td>Empresa</td>
            <td><select name="empresa">
            <?php
                	while ($row7=mysql_fetch_row($result2)) 
{ 
echo "<option value=".$row7[$i].">".$row7[$i]."</option>\n"; 
} 
?>
                </select>
				<a href="FormEmpresa.php" target="_self"><input type="button" name="boton" value="Agregar" /></a>
				</td>
				
        </tr>
        
    </table>
    
<br />
<br />
<br />
    <br />
   <input type="submit" name="vincular" value="Vincular"/ 
	</form>
	</fieldset>



</body>
</html>
