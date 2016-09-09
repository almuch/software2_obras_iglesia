<?php 
	//empezar la sesion
	session_start();
	date_default_timezone_set('America/La_Paz');
	//incluir configuracion
	require_once ('config/config.php');

	//incluir helpers
	require_once ('helpers/system_helper.php');
	require_once ('helpers/format_helper.php');
	//require_once ('helpers/db_helper.php');
	
	//autoload clases
	function __autoload($class_name) {
		require_once ('modelo/' . $class_name . '.php');
	}
?>