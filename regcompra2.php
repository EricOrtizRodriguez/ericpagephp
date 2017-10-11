<html lang="es">
<head>
<meta charset="utf-8">
<title>SISTEMAA</title>
 <form action="validar_compra.php" method = "post">
 <link rel="stylesheet" href="style.css">

</head>
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="index.html">
			<span class="site-name">SISTEMAA</span>
		</a> 
 
		<nav>
			<ul>
				<li><a href="index.php">INICIO</a></li>
                <li><a href="regcompra.php">REGISTRAR COMPRA</a></li>
                <li><a href="productos.php">PRODUCTOS</a></li>
				<li><a href="ventas.php">VENTAS</a></li>
               
				
			</ul>
		</nav><!-- / nav -->
 
	</header>
 
	
	<section id="main-content">
	
		<article>
			<header>
				<h1>REGISTRO DE COMPRAS</h1>
			</header>
			
		   <center>
			
			
             
			</center>
			
			<div class="content">
			ID_VENTA <input type="number" name="ID_VENTA" placeholder="NO RELLENAR"><BR>
					
			ID MESERO: <select name="ID_EMPLEADO">
							<option selected="selected">3</option>
							<option>4</option>
							</select><BR>
							
			FECHA DE PEDIDO:  <input type="date" name="FECHA_PEDIDO"> 
			
			<BR>
		     
			TIPO DE PEDIDO: <select name="TIPO_PEDIDO">
							<option selected="selected">COMER AQUI</option>
							<option>PARA LLEVAR</option></select><BR>
			
			NUM. MESA: <select name="ID_MESA">
							<option selected="selected">0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option></select>	
							
			<br><h3>REFRESCOS</h3>
			<table>
			<tr>
			<td><center>
			COCA COLA:<BR>
			SIDRAL:<BR>
			FANTA:<BR> 
			FRESCA:<BR> 
			SPRITE: 
			</center>
			</td>
			<td>
			<br><input type="number" name="COCA" VALUE="0"><BR>
			<input type="number" name="SIDRAL" VALUE="0"><BR>
			<input type="number" name="FANTA" VALUE="0"><BR>
			<input type="number" name="FRESCA" VALUE="0"><BR>
			<input type="number" name="SPRITE" VALUE="0"><BR><BR>
			</td>
			</tr>
			</table>
			
			
			<h3>TACOS</h3>
			<table>
			<tr>
			<td><center><br>
			ARRACHERA<br> 
			BISTEC <br>
			ENCHILADA <br>
			LONGANIZA <br>
			LOMO <br>
			</center>
			</td>
			<td><BR>
			<input type="number" name="ARRA" VALUE="0"><BR>
			<input type="number" name="BISTEC" VALUE="0"><BR>
			<input type="number" name="ENCH" VALUE="0"><BR>
			<input type="number" name="LONG" VALUE="0"><BR>
			<input type="number" name="LOMO" VALUE="0">
			</td>
			</tr>
			</table>				
							
							
			

<BR> <input type="submit" name="REGISTRAR" value="REGISTRAR" />			
				
			</div>
			
		</article> 
	
	</section> 	
	
	<footer id="main-footer">
		<p>&copy; 2016 ERIC ORTIZ RODRIGUEZ
	</footer> 
 
	
</body>
</html>

