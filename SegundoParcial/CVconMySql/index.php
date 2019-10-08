<?php 
	require 'php/funciones.php';

	
	$conexion = conexion_bd('cv', 'root', '');

	if(!$conexion)
	{
		die();
	}


	require "index.view.php"
 ?>