<?php include("header.php");?>

<?php include("userdata.php");?>


<h1>TIENDA</h1>
BIENVENIDO <?php echo $user['nombre'];?> 
<a href="logout.php">Cerrar sesion</a>
<?php 
  if ($_GET['ok']==1){
	echo "<p>Compra realizada con exito</p>";  	
  }
?>

<table class="table">
	<tr>
		<th class="cabecera celda">ID</th>
		<th class="cabecera celda">Cosas</th>
		<th class="cabecera celda">Cantidad</th>
		<th class="cabecera celda">Precio</th>
		<th class="cabecera celda">Comprar</th>
	</tr>
<?php $resultado = mysql_query("SELECT * FROM cosas");
	while ($fila = mysql_fetch_row($resultado)):
?>
	<form action="http://localhost/comprar.php" method="POST">

	<tr>
		<td class="celda">
			<input type="hidden" value="<?php echo $fila[0];?>" name="id"> 
			<?php echo $fila[0];?>
		</td>
		<td class="celda"> <?php echo $fila[1];?></td>
		<td class="celda"> <?php echo $fila[2];?></td>
		<td class="celda"> <?php echo $fila[3];?></td>
		<td class="celda">
			<input type="submit" value="COMPRAR">
		</td>
	</tr>
	</form>

<?php
	endwhile;
	mysql_free_result($resultado);
?>

</table>
<?php include("footer.php");?>
