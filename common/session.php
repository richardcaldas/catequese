<?php 
	session_start();
	if((!isset ($_SESSION["cpfLogged"])) and (!isset ($_SESSION["profileLogged"]))){
		$url = $_SERVER['REQUEST_URI'];
		$end = strrpos($url, '/') + 1;
		$path = substr($url, $end);
		header('location:login.php?path='.$path);
	}

	
?>