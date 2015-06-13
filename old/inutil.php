<?php
	$con=new mysqli('localhost', 'root', "numeropi3,14", 'tabla_inicio');
	if($con->connect_error){
		die("Muerte horrible");
	}

	$consulta="INSERT INTO facturas (usuario_id) VALUES (1)";
	if($con->query($consulta) === TRUE){
		echo 'ok';
		$consulta="SELECT * from facturas WHERE usuario_id=1 ORDER BY ID DESC";
		$resultado=$con->query($consulta);
		if($con->errno) die($con->error);
		$ultima=$resultado->fetch_array();
		$idfactura=$ultima['ID'];
		echo $idfactura;
		$consulta="INSERT INTO cosas_fac (Cosas, Factura) VALUES (".$_GET["id"].", ".$idfactura.")";
		if($con->query($consulta)===TRUE){
			echo 'ok';
		}
		else{
			echo "petada del 16";
		}
	}
	else{
		echo "PETADA DEL 15 ".$con->error;
	}
	
	//header('location: comprar.php/?id=2');
	//die();
	
?>

HOYGAN