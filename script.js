function validar(){

			//valido el id 
	   		if (document.fvalida.id.value.length==0){ 
      		alert("Tiene que escribir su id") 
      		document.fvalida.id.focus() 
      		return 0; 
   			} 

			//valido el nombre 
		   	if (document.fvalida.nombre.value.length==0){ 
		      	alert("Tiene que escribir su nombre") 
		      	document.fvalida.nombre.focus() 
		      	return 0; 
		   	} 

		   	//valido el apellido 
		   	if (document.fvalida.apellido.value.length==0){ 
		      	alert("Tiene que escribir su Apellido") 
		      	document.fvalida.apellido.focus() 
		      	return 0; 
	
			}	
				   
		   	 	if (document.fvalida.nro.value.length=="")
		   	 	{
		   	 		alert("debe ingresar su DNI")
		   	 		return false;
		   	 	}

		   	 	if (document.fvalida.nro.value.length != 8)
		   	 	{
		   	 		alert("Debe ingresar 8 numeros exactos para el DNI")
		   	 	}

				   	 	for (i=0; i<document.fvalida.nro.value.length;i++)
				   	 	{
				   	 		if (isNaN(parseInt(document.fvalida.nro.value.charAt(i)))==true)
				   	 		{
				   	 			alert("Solamente se permiten numero en el DNI");
				   	 			return false;	
				   	 		}
				   	 	}


		   	//valido la sucursal
		   	if (document.fvalida.sucursal.selectedIndex==0){ 
		      	alert("Debe seleccionar una sucursal") 
		      	document.fvalida.Sucursal.focus() 
		      	return 0; 
		   	} 



		   	//valido el area en donde trabajo
		   	if (document.fvalida.area.selectedIndex==0){ 
		      	alert("Debe seleccionar una area") 
		      	document.fvalida.area.focus() 
		      	return 0; 
		   	} 

		   	//el formulario se envia 
	   	alert("Muchas gracias por enviar el formulario"); 
	   	document.fvalida.submit(); 

			}

		  	 	

	