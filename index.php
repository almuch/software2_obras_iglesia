<?php
	require('core/init.php');

	//Crear plantilla del login
	if(isset($_SESSION['is_logged_in'])){
		$template = new Template('templates/principal.php');
	}else{
		$template = new Template('templates/index.php');
	}
	
	//Cerrar sesion de usuario
	if(isset($_GET['csesion']) ){
		$usuario->cerrar_sesion();
		unset($_GET['csesion']);
	}

	//Volver a la pantalla principal
	if(isset($_GET['principal'])){
		$template = new Template('templates/principal.php');
		unset($_GET['principal']);
	}
	
	//Iniciar Sesion
	if(isset($_POST['username']) && isset($_POST['password'])){
		if($usuario->iniciar_sesion($_POST['username'], md5($_POST['password']) ) ){
			$template = new Template('templates/principal.php');
		}else{
			$_SESSION['mensajeError'] = "Usuario o contraseña incorrecta";
		}
	}
	echo $template;
?>
