<?php
 //conexão com o servidor
$connection = mysqli_connect("localhost", "cateques_admin", "admin", "cateques_site");
 
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$connection) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

mysqli_set_charset( $connection, 'utf8');

 ?>