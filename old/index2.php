
<html>
	<head>
		<?php
			/* Esto es la conexion con la base de datos */
			$con=mysql_connect("localhost", "root", "numeropi3,14");
			if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			mysql_select_db("tabla_inicio");
		?>
	</head>
	<body>
		<h1>Titulo</h1>
		<p>Texto en parrafo</p>
		<table class="table">
			<tr>
				<th class="cabecera celda">ID</th>
				<th class="cabecera celda">Cosas</th>
				<th class="cabecera celda">Cantidad</th>
				<th class="cabecera celda">Coste</th>
			</tr>
		<?php $resultado = mysql_query("SELECT * FROM cosas");
			while ($fila = mysql_fetch_row($resultado)):
		?>
    		<tr>
    			<td class="celda"> <?php echo $fila[0];?></td>
    			<td class="celda"> <?php echo $fila[1];?></td>
    			<td class="celda"> <?php echo $fila[2];?></td>
    			<td class="celda"> <?php echo $fila[3];?></td>
    		</tr>
		<?php
			endwhile;
			mysql_free_result($resultado);
		?>
		</table>
		<h1>Titulo</h1>
		<p>Texto en parrafo</p>
		<table class="table">
			<tr>
				<th class="cabecera celda">ID</th>
				<th class="cabecera celda">Cosas</th>
				<th class="cabecera celda">Cantidad</th>
				<th class="cabecera celda">Coste</th>
			</tr>
		<?php $resultado = mysql_query("SELECT * FROM cosas");
			while ($fila = mysql_fetch_row($resultado)):
		?>
    		<tr>
    			<td class="celda"> <?php echo $fila[0];?></td>
    			<td class="celda"> <?php echo $fila[1];?></td>
    			<td class="celda"> <?php echo $fila[2];?></td>
    			<td class="celda"> <?php echo $fila[3];?></td>
    		</tr>
		<?php
			endwhile;
			mysql_free_result($resultado);
		?>
		</table>
	</body>
	<foot>
		<?php 
			mysqli_close($con);
		?>
		<link rel="stylesheet" type="text/css" href="main2.css">

	</foot>

</html>