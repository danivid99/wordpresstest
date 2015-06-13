<?php
    include("header.php");

	$id=$_GET['id'];
	$hash=$_GET['hash'];

	$resultado = mysql_query("SELECT * FROM usuarios WHERE id='$id'");
    $user = mysql_fetch_array($resultado);
    if($user["hash"]==$hash){
    	$consulta="UPDATE usuarios SET activo=1 WHERE id='$id'";
		mysql_query($consulta);
		header("Location: login.php");  
    }


?>