<?php 
	session_start();
	if((!isset ($_SESSION["idUser"])) and (!isset ($_SESSION["perfil"]))){
		$url = $_SERVER['REQUEST_URI'];
		$end = strrpos($url, '/') + 1;
		$path = substr($url, $end);
		header('location:login.php?path='.$path);
	}

	
?>