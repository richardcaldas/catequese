<?php 
session_start();
if( @$_GET['token'] === md5(session_id()) ){
   // limpe tudo que for necessário na saída.
   // Eu geralmente não destruo a seção, mas invalido os dados da mesma
   // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
   session_destroy();
   header("location: ../index.php");
   exit();
} else {
   $sessionID = md5(session_id());
   echo($sessionID);
   echo "<a href='logout.php?token=".$sessionID."'>Confirmar logout</a>";
}
?>