<?php include("header.php");?>

<?php include("userdata.php");?>
<?php
	$consulta="SELECT cosas.Cosas, cosas.coste, COUNT(*) AS Cantidad ".
		"FROM facturas JOIN cosas_fac ON (facturas.ID=cosas_fac.Factura) ".
		"JOIN cosas ON (cosas_fac.Cosas=cosas.ID) ".
		"WHERE facturas.usuario_id=".$_SESSION["id"].
		" GROUP BY cosas.ID";
	$resultado = mysql_query($consulta);
?>

<h1>CARRITO</h1>
BIENVENIDO <?php echo $user['nombre'];?> 
<a href="logout.php">Cerrar sesion</a>


<table>
	<tr>
		<th>Cosa</th>º
		<th>Precio</th>
		<th>Cantidad</th>
		<th>TOTAL</th>
	</tr>
	<?php 
		while ($fila = mysql_fetch_row($resultado)):
	?>		
		<tr>
				
			<td><?php echo $fila[0]?></td>
			<td><?php echo $fila[1]?></td>
			<td><?php echo $fila[2]?></td>
			<td><?php echo ($fila[1]*$fila[2])?></td>
		</tr>
	<?php
		endwhile;
		mysql_free_result($resultado);
	?>
</table>



<?php include("footer.php");?>