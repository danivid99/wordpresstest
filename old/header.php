<html>
	<head>
		<?php
			/* Esto es la conexion con la base de datos */
			$version="1.0.0";
			$con=mysql_connect("localhost", "root", "numeropi3,14");
			if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			mysql_select_db("tabla_inicio");
		?>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/main.js?version=<?php echo $version;?>"></script>
		<link rel="stylesheet" type="text/css" href="main.css">

	</head>
	<body bgcolor="ninjaturtle">
		<input type="button" value="BOTON JS" onclick="alertas();">
		<input type="button" value="Cancela" onclick="cancela();">
		<input type="button" value="MUESTRA TEXTO" onclick="switch_texto();">
		<div id="caja_vacia">
		<div id="texto_oculto" class="oculto">Esto es un texto oculto</div>
		<div width="100%">
			<input style="position:relative;" type="button" value="PILLAME!!" id="boton_inquieto">
		</div>
		</div>