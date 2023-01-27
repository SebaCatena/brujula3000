<?php
	
	$btn_enviar = ( isset($_POST["btn_enviar"]) && !empty($_POST["btn_enviar"]))? true:false;

	function inicializar_vars() {
		global $nombre, $sexo, $sexodesc, $estudio, $estudiodesc;
		
			$id="";
			$nombre="";
			$apellido="";
			$nro="";
			$telefono="";
			$sucursal="";
			$area="";
			$salario="";
		}

		function recuperar_datos() {
		global $id,$nombre, $apellido, $nro,$telefono,$sucursal,$area,$salario;
		
			$id=(isset($_POST["id"]) && !empty($_POST["id"]))? $_POST[id]:"";
			$nombre=(isset($_POST["nombre"]) && !empty($_POST["nombre"]))? $_POST[nombre]:"";
			$apellido=(isset($_POST["apellido"]) && !empty($_POST["apellido"]))? $_POST[apellido]:"";
			$nro=(isset($_POST["nro"]) && !empty($_POST["nro"]))? $_POST[nro]:"";
			$telefono=(isset($_POST["telefono"]) && !empty($_POST["telefono"]))? $_POST[telefono]:"";
			$sucursal=(isset($_POST["sucursal"]) && !empty($_POST["sucursal"]))? $_POST[sucursal]:"";
			$area=(isset($_POST["area"]) && !empty($_POST["area"]))? $_POST[area]:"";
			$salario=(isset($_POST["salario"]) && !empty($_POST["salario"]))? $_POST[salario]:"";
		}

		function es_numero($id, $cero_valido = false) {
	    if (!$cero_valido) $re = '/^[1-9]+[0-9]*$/';   
	    else $re = '/^(0|([1-9]+[0-9]*))$/';           
	     
	    return (preg_match($re, $id));
	}
		
		function validarnombre($nombre){  
		    //NO cumple longitud minima  
		    if(strlen($nombre) < 4)  
		        return false;  
		    //SI longitud pero NO solo caracteres A-z  
		    else if(!preg_match("/^[a-zA-Z]+$/", $nombre))  
		        return false;  
		    // SI longitud, SI caracteres A-z  
		    else  
		        return true;  
		} 

		function validarapellido($apellido){  
		    //NO cumple longitud minima  
		    if(strlen($apellido) < 1)  
		        return false;  
		    //SI longitud pero NO solo caracteres A-z  
		    else if(!preg_match("/^[a-zA-Z]+$/", $apellido))  
		        return false;  
		    // SI longitud, SI caracteres A-z  
		    else  
		        return true;  
		} 

		/*Números telefónicos*/
		
		function validar_telefono ($telefono)
		    {
		    resultado(preg_match('/^[0-9]{9,9}$/', $telefono)); 
		    }


		   function es_dni($nro, $cero_valido = false) {
		    if (!$cero_valido) $re = '/^[1-9]+[0-9]*$/';   
		    else $re = '/^(0|([1-9]+[0-9]*))$/';           
		     
		    return (preg_match($re, $nro));

		    
		}


		inicializar_vars();


		if ($btn_enviar) {
		# si se enviaron datos del formulario al seridor, recupero los datos
		recuperar_datos();
		
		es_numero();
		validarnombre();
		validarapellido();
		validar_telefono ();
		es_dni();

		if (! is_null($sucursal) ) {
		for ($i=0; $i<count($sucursal); $i++) {
			$sucursal .= " <br> $sucursal[$i] ";
		} 
	}


	if (! is_null($area) ) {
		for ($i=0; $i<count($area); $i++) {
			$area .= " <br> $area[$i] ";
		} 
	}

	
}

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">


<html>
<head>
	<meta charset="utf-8">
		
	<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />

	<script language="javascript" type="text/javascript" src="script.js"></script>


</head>
<body>
	<h1 align="center">Nuevo empleado</h1>
	
<br>
<form ACTION='altaempleado.php' name="fvalida" METHOD='POST'>
		
		<fieldset>
		<legend>Datos personales</legend>

		<br>
		<label for='id'>Id</label>
		<input type="text" name="id" id='id' value="1">
		<br>
		
		<br>
		<label for='nombre'>Nombre</label>
		<input type="text" name="nombre" id='nombre'>
		
		<br>
		<label for='Apellido'>Apellido</label>
		<input type="text" name="Apellido" id='apellido'> 	
		<br>
		
		<label for='nro'>Documento</label><input type="text" name="nro" id='nro' maxlength="8">
		<br>
		<br>

		<label for='Telefono'>Telefono</label>
		<input type="text" name="telefono" id='telefono'> 	
		<br>
		</fieldset>
		<br>
		<fieldset>
		<label for='Sucursal'>Sucursal</label>
		<select name="sucursal" id="sucursal">
			<option>Seleccione</option>
			<option>San Martin 82</option>
			<option>D14</option>
			<option>D71</option>
			<option>D144</option>
			<option>D172</option>
			<option>Donado</option>
			<option>San Martin y Belgrano</option>
		</select>
		<br>
		<label for='Area'>Area</label>
		<select name="area" id="Area" name="area">
			<option>Seleccione</option>
			<option>Directorio</option>
			<option>Gerencia</option>
			<option>Sistemas</option>
			<option>Logistica</option>
			<option>Ventas</option>
			<option>Administracion</option>
			<option>Contabilidad</option>
			<option>Finanzaz</option>
			<option>Recaudacion</option>
			<option>Marketing</option>
			
		</select
		<br>

		<label for='salario'>Salario*</label>
		<input type="text" name="salario" id='salario'> 	
		<br>
		</fieldset>
		
		<br><br>
		<input type='button'  id='' name='btn_enviar' value='Enviar' action='' onclick="validar()">

		
		</fieldset>

</form>




</html>
