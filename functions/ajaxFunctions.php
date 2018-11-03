<?php require_once("../common/session.php");
	
	include_once('../common/connection.php');
	date_default_timezone_set("America/Sao_Paulo");
	
	if (isset($_GET["action"]) && $_GET['action'] == 'removeTurma'){
		
		$id = $_GET['id'];
		
		$sql = "delete from turma where id = ".$id;
		$query = mysqli_query($connection, $sql);
		
		if ($query){
			$status = "ok";
			$return = array("status"=>$status);
		}else{
			$status = "error";
			$return = array("status"=>$status, "error"=>mysqli_error($connection));
		}
		
		echo json_encode($return);
		
	}
	
	
	
?>