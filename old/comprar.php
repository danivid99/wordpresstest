<?php
	$con=new mysqli('localhost', 'root', "numeropi3,14", 'tabla_inicio');
	if($con->connect_error){
		die("Muerte horrible");
	}
	$consulta="INSERT INTO facturas (usuario_id) VALUES (1)";
	if($con->query($consulta) === TRUE){
		$consulta="SELECT * from facturas WHERE usuario_id=1 ORDER BY ID DESC";
		$resultado=$con->query($consulta);
		if($con->errno) die($con->error);
		$ultima=$resultado->fetch_array();
		$idfactura=$ultima['ID'];
		$consulta="INSERT INTO cosas_fac (Cosas, Factura) VALUES (".$_POST["id"].", ".$idfactura.")";
		if($con->query($consulta)===TRUE){
			echo 'ok';
		}
		else{
			echo "petada del 16";
			die();	
		}
	}
	else{
		echo "PETADA DEL 15 ".$con->error;
		die();
	}
	
	header('location: tienda.php?ok=1');
	die();
	
?>
