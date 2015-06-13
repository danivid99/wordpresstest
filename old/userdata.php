<?php
	session_start();
	if(!isset($_SESSION['id'])) {
	  header('Location: login.php'); 
	  exit();
	}
	$id=$_SESSION['id'];
	$resultado = mysql_query("SELECT * FROM usuarios WHERE id='$id'");
    $user = mysql_fetch_array($resultado);
?>