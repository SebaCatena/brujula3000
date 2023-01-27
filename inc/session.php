<?php

session_start();  #iniciar o reanuda la sesión

	
	$user = (isset($_SESSION["user"]) && !empty($_SESSION["user"]))? trim($_SESSION["user"]):""; 
	 


	if ($user=="") {
		
		# echo "sin seccion";
		# si existe alguna session la destruye
		
		unset($_SESSION["user"]);
		$_SESSION = array();
		
		session_destroy();
		
	} else {
		# operaciones relacionadas a la session
		# 	por ej: definir perfiles de usuarios, cargar datos de sesión, tiempo de la seccion, ...

		// si pasa un tiempo determinado, se debería destruir la sección  
	}
	
?>