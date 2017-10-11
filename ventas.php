<html lang="es">
<head>
<meta charset="utf-8">
<title>SISTEMA</title>
 <form action="busqueda_fecha.php" method = "post">
 <link rel="stylesheet" href="style.css">

</head>
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="index.html">
			<span class="site-name">SISTEMA</span>
		</a> 
 
		<nav>
			<ul>
				
                
                <li><a href="index.php">INICIO</a></li>
                <li><a href="regcompra2.php">REGISTRAR COMPRA</a></li>
                <li><a href="productos.php">PRODUCTOS</a></li>
				<li><a href="ventas.php">VENTAS</a></li>
                				
			</ul>
		</nav><!-- / nav -->
 
	</header>
 
	
	<section id="main-content">
	
		<article>
			
			
			
			<div class="content">
				<CENTER>
				<header>
				<h1>VENTAS</h1>
			</header>
			
		BUSQUEDA POR FECHA: <input type="date" name="FECHA">
		<input type="submit" name="BUSCAR" value="BUSCAR" />
		</form>
			 <?php  
   
$conexion = mysqli_connect("localhost", "root", "","sistema_arra") or
die("No se pudo conectar a la base de datos");

$consulta = mysqli_query($conexion, "SELECT * FROM pruebaventa ") or die(mysql_error());
		
?>


<H3></H3>
<table width="40%" border="1">
<tr>
<td> ID_VENTA </td><td>  ID_EMPLEADO</td><td>  FECHA_PEDIDO</td><td>  TIPO_PEDIDO</td><td>  ID_MESA</td><td>  TOTAL</td>    <BR>
</tr>
<?php
		
		while($filas = mysqli_fetch_array($consulta))
		{	
			$ID_VENTA=$filas['ID_VENTA'];
			$ID_EMPLEADO=$filas['ID_EMPLEADO'];
			$FECHA_PEDIDO=$filas['FECHA_PEDIDO'];
			$TIPO_PEDIDO=$filas['TIPO_PEDIDO'];
			$ID_MESA=$filas['ID_MESA'];
			$TOTAL=$filas['TOTAL'];
?>
			  <tr>
			   <td><?php echo "<p style='color:#666;'>".$ID_VENTA."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$ID_EMPLEADO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$FECHA_PEDIDO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$TIPO_PEDIDO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$ID_MESA."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$TOTAL."</p>";?></td>
			  </tr>
<?php			
		}
?>

</table>
</CENTER>

</section>
			
			</div>
			
		</article> 
	
	</section> 	
	
	<footer id="main-footer">
		<p>&copy; 2016 ERIC ORTIZ RODRIGUEZ 
	</footer> 
 
	
</body>
</html>