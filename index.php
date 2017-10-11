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
				<h1>INICIO</h1>
			</header>
			
			
			<div class="content">
				
			 <?php  
   
$conexion = mysqli_connect("localhost", "root", "","sistema_arra") or
die("No se pudo conectar a la base de datos");

$consulta = mysqli_query($conexion, "SELECT * FROM mesa") or die(mysql_error());
		
?>


MESAS
<table width="40%" border="1">
<tr>
<td> NUM. MESA </td><td>  CAPACIDAD DE PERSONAS</td> <BR>
</tr>
<?php
		
		while($filas = mysqli_fetch_array($consulta))
		{	
			$ID_MESA=$filas['ID_MESA'];
			$NO_MAX_PERSONAS=$filas['NO_MAX_PERSONAS'];
			
?>
			  <tr>
			    <td><?php echo "<p style='color:#666;'>".$ID_MESA."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$NO_MAX_PERSONAS."</p>";?></td>
                
			  </tr>
<?php			
		}
?>

</table>
<section id="tab1">
 <?php  
   
$conexion = mysqli_connect("localhost", "root", "","sistema_arra") or
die("No se pudo conectar a la base de datos");

$consulta = mysqli_query($conexion, "SELECT ID_EMPLEADO, NOMBRE, APELLIDOS_PA, APELLIDOS_MA FROM empleado WHERE CARGO='MESERO'") or die(mysql_error());
		
?>

MESEROS
<table width="40%" border="1">
<tr>
<td> ID_EMPLEADO </td><td>  NOMBRE</td><td> APELLIDOS_PA </td><td>  APELLIDOS_MA</td> <BR>
</tr>
<?php
		
		while($filas = mysqli_fetch_array($consulta))
		{	
			$ID_EMPLEADO=$filas['ID_EMPLEADO'];
			$NOMBRE=$filas['NOMBRE'];
			$APELLIDOS_PA=$filas['APELLIDOS_PA'];
			$APELLIDOS_MA=$filas['APELLIDOS_MA'];
?>
			  <tr>
			    <td><?php echo "<p style='color:#666;'>".$ID_EMPLEADO."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$NOMBRE."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$APELLIDOS_PA."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$APELLIDOS_MA."</p>";?></td>
				
			  </tr>
<?php			
		}
?>

</table>
</section>
			
			</div>
			
		</article> 
	
	</section> 	
	
	<footer id="main-footer">
		<p>&copy; 2016 ERIC ORTIZ RODRIGUEZ 
	</footer> 
 
	
</body>
</html>