<html lang="es">
<head>
<meta charset="utf-8">
<title>SISTEMA</title>
 
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
			<header>
				<h1>PRODUCTOS</h1>
			</header>
			
			
			<div class="content">
				
			 <?php  
   
$conexion = mysqli_connect("localhost", "root", "","sistema_arra") or
die("No se pudo conectar a la base de datos");

$consulta = mysqli_query($conexion, "SELECT * FROM productos_menu WHERE TIPO='TACO'") or die(mysql_error());
		
?>


<H3>TACOS</H3>
<table width="40%" border="1">
<tr>
<td> ID_PRODUCTO </td><td>  NOMBRE_P</td><td>  TIPO</td><td>  PRECIO</td><td>  CANTIDAD</td>    <BR>
</tr>
<?php
		
		while($filas = mysqli_fetch_array($consulta))
		{	
			$ID_PRODUCTO=$filas['ID_PRODUCTO'];
			$NOMBRE_P=$filas['NOMBRE_P'];
			$TIPO=$filas['TIPO'];
			$PRECIO=$filas['PRECIO'];
			$CANTIDAD=$filas['CANTIDAD'];
			
?>
			  <tr>
			   <td><?php echo "<p style='color:#666;'>".$ID_PRODUCTO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$NOMBRE_P."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$TIPO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$PRECIO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$CANTIDAD."</p>";?></td>
                
			  </tr>
<?php			
		}
?>

</table>
<section id="tab1">
 <?php  
   
$conexion = mysqli_connect("localhost", "root", "","sistema_arra") or
die("No se pudo conectar a la base de datos");

$consulta = mysqli_query($conexion, "SELECT *FROM productos_menu WHERE TIPO='REFRESCO'") or die(mysql_error());
		
?>

<BR><H3>REFRESCOS</H3>
<table width="40%" border="1">
<tr>
<td> ID_PRODUCTO </td><td>  NOMBRE_P</td><td>  TIPO</td><td>  PRECIO</td><td>  CANTIDAD</td>    <BR>
</tr>
<?php
		
		while($filas = mysqli_fetch_array($consulta))
		{	
			$ID_PRODUCTO=$filas['ID_PRODUCTO'];
			$NOMBRE_P=$filas['NOMBRE_P'];
			$TIPO=$filas['TIPO'];
			$PRECIO=$filas['PRECIO'];
			$CANTIDAD=$filas['CANTIDAD'];
?>
			  <tr>
			   <td><?php echo "<p style='color:#666;'>".$ID_PRODUCTO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$NOMBRE_P."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$TIPO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$PRECIO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$CANTIDAD."</p>";?></td>
			  </tr>
<?php			
		}
?>

</table><br><br>
<li><a href="altas_prod.html">REGRESAR PRODUCTO</a></li>
</section>
			
			</div>
			
		</article> 
	
	</section> 	
	
	<footer id="main-footer">
		<p>&copy; 2016 ERIC ORTIZ RODRIGUEZ 
	</footer> 
 
	
</body>
</html>