<?php include("header.php");?>
<h1>Titulo</h1>
<p>Texto en parrafo</p>
<a href="tienda.php">Acceder a tienda</a>
<table class="table">
	<tr>
		<th class="cabecera celda">ID</th>
		<th class="cabecera celda">Nombre</th>
		<th class="cabecera celda">Apellido</th>
	</tr>
<?php $resultado = mysql_query("SELECT id, nombre, apellidos FROM usuarios");
	while ($fila = mysql_fetch_row($resultado)):
?>
	<tr>
		<td class="celda"> <?php echo $fila[0];?></td>
		<td class="celda"> <?php echo $fila[1];?></td>
		<td class="celda"> <?php echo $fila[2];?></td>
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
		<th class="cabecera celda">Precio</th>
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
<?php include("footer.php");?>