
<?php 

	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$pw1=$_POST["contrasenya"];
	$pw2=$_POST["repitecontrasenya"];
	$email=$_POST["email"];
	$hash=rand();
	if($pw1 == $pw2){

		$con=new mysqli('localhost', 'root', "numeropi3,14", 'tabla_inicio');
		if($con->connect_error){
			die("Muerte horrible");
		}

		$consulta="INSERT INTO usuarios (nombre, apellidos, email, password, hash) VALUES ('".$nombre."', '".$apellidos."', '".$email."', '".$pw1."', '".$hash."')";

		if($con->query($consulta) === TRUE){

			$consulta="SELECT * FROM usuarios WHERE email='$email'";
			$resultado=$con->query($consulta);
			$user=$resultado->fetch_array();
			$mensaje='HOLA LUSER HAZ CLICK <a href="http://localhost/activar.php?id='.$user["id"].'&hash='.$user["hash"].'">AQUI</a>';
			echo $mensaje;
			/*if(mail ( $user["email"] , "ACTIVATE PAQUETE" , $mensaje)){
				echo $mensaje;
			}
			else{
				echo "mail no mandado";
			}*/

		}
	}
	else{
		echo "ERROR!!!";
	}
	
?>