<?php 
	/*
	 * Transformar Fecha Ahora
	*/
	function fechaHoy(){
		$fecha = getdate();
		return ($fecha['year']."-".$fecha['mon']."-".$fecha['mday']);
	}
	/*
	 * Transformar Tiempo Ahora
	*/
	function timeAhora(){
		$fecha = getdate();
		return ($fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds']);
	}
?>