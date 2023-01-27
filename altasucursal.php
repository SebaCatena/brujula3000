<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
	<meta charset="utf-8">
		
		<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
		<script language="javascript" type="text/javascript" src="script.js"></script>


</head>
<body>
	<h1 align="center">Sucursales</h1>
		<form ACTION= 'altasucursal.php' name="fvalida" METHOD='POST'>
<br>
		<fieldset>
		<legend>Datos personales</legend>

		
		<br>
		<label for='id'>id</label><input type="text" name="id" id='id'>
		<br>
		
		<br>
		<label for='Nombre'>Nombre</label><input type="text" name="nombre" id='nombre'>
		
		<br>
		<label for='Direccion'>Direccion</label><input type="text" name="Direccion" id='Direccion'> 	
		<br>
		
		
		
		<br><br>
		<input type='submit'  id='' name='' value='Guardar' action='' onclick="validar()">

		<input type='button' name='' id='' value='Salir'>
		</fieldset>

</form>




</html>
