<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/SIWEDEE/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<img src="/SIWEDEE/Images/logoUPC.jpg" align="right" />
<title>Solicitud de Estancia</title>
<style type="text/css">   

#formul {  
    padding: 2px 0px 0px 30px;   /* margen con valores: arriba - derecha - abajo - izquierda */ 
    font-family:verdana,arial; 
    font-size:9pt; 
}  

.campos {  
    font-family:verdana,arial;     /* tipo de letra */  
    width: 500px;                 /* anchura de campos de formulario */  
    font-size:8pt;                /* tamaño de la letra*/   
    color:#008000;                 /* color del texto */   
    border: 1px dotted red;        /* color del borde puede ser solid ó dotted */   
    background-color:#FFFFff;    /* color del fondo */   
}  

.boton{ 
    font-size:12px; 
    font-family:Verdana,Helvetica; 
    font-weight:bold; 
    color:#0000FF; 
    background:#A4C1FF; 
    border:0px; 
    width:120px; 
    height:25px; 
} 
footer {
            position: relative;
            /* Altura total del footer en px con valor negativo */
            margin-top: +43px;
            /* Altura del footer en px. Se han restado los 5px del margen
               superior mas los 5px del margen inferior
            */
            height: 20px;
            padding:2px 10px;
            clear: both;
            background: #ffffff;
            text-align: left;
            color: #c0c0c0;
        }

 

#b_submit {  
    margin: -25px 0px 0px 380px;    /* margen con valores: arriba - derecha - abajo - izquierda */  
}  

</style>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php
session_start();
if(!isset($_SESSION["usuario"]))
{
	header('Location: index.php');
	exit();
}
?>
<div id="formul"> 
<h1>BIENVENIDO</h1>
<a href="logout.php" text-align="right">Cerrar Sesión</a>

        
	<form method="post" action="SubirCalificacion.php">
		<fieldset>
			<legend>Universidad Politecnica del centro</legend>
			<h3></h3>
			<div>
				<p>Nombre de la empresa</p></br >
				<input class="campos" type="text" id="nombre" />
			</div>
			<div>
				<p>Direccion de la Empresa</p></br >
				<input class="campos" type="text" id="direccion" />
			</div>
			<div>
				<p>Correo Electronico</p></br >
				<input class="campos" type="text" id="correo" />
				
			</div>
			<div>
				<p>Telefono de la empresa</p></br >
				<input class="campos" type="text" id="tele" />
			</div>
			<div>
				<p>Representante</p></br >
				<input class="campos" type="text" id="repre" />
			</div>
			<div>
				<p>Razon social</p></br >
				<input type="text" class="campos" id="razon" />
				</br>
			</div>
			</fieldset>
		</form><!-- form -->
    <br />
	<input type="submit" name="enviar_frm" value="Enviar..."/>
	<br />
    
	</form>
	
</div>
<footer>
        <div class='formul'>
            <p>- Universidad Politecnica del Centro 2015 version 0.5</p>
        </div>
    </footer>
</body>
</html>