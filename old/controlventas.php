<?php include("header.php");?>

<?php include("userdata.php");?>
<?php
    $consulta="SELECT cosas.Cosas, COUNT(*) AS Ventas, cosas.ID AS cosas_id ".
       "FROM cosas JOIN cosas_fac ON(cosas.ID = cosas_fac.Cosas) ".
	   "JOIN facturas ON(cosas_fac.Factura=facturas.ID) ".
       "JOIN usuarios ON(facturas.usuario_id=usuarios.ID) ".
       "GROUP BY cosas.ID";
    $resultado = mysql_query($consulta);
?>
<h1>CONTROL DE VENTAS</h1>
BIENVENIDO <?php echo $user['nombre'];?> 
<a href="logout.php">Cerrar sesion</a>

<?php 
	while ($fila = mysql_fetch_row($resultado)):
?>			
	<div>
		<?php echo $fila[0];?></td>
		<?php echo $fila[1];?></td>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Cantidad</th>
			</tr>
			<?php 
				$consulta_usuarios="SELECT usuarios.nombre, usuarios.apellidos, COUNT(*) AS n_compras".
					" FROM cosas_fac JOIN facturas ON (cosas_fac.Factura=facturas.ID)".
					" JOIN usuarios ON (facturas.usuario_id=usuarios.id)".
					" WHERE cosas_fac.Cosas=".$fila[2].
					" GROUP BY usuarios.id;";
				$resultado_usuarios=mysql_query($consulta_usuarios);
				while($fila_usuarios=mysql_fetch_row($resultado_usuarios)):
			?>
				<tr>
					<td><?php echo $fila_usuarios[0];?></td>
					<td><?php echo $fila_usuarios[1];?></td>
					<td><?php echo $fila_usuarios[2];?></td>
				</tr>
			<?php
				endwhile;
				mysql_free_result($resultado_usuarios);
			?>
		</table>
	</div>
	<br>
<?php
	endwhile;
	mysql_free_result($resultado);
?>




<?php include("footer.php");?>