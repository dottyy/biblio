<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Isa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width, user-scalable=no, initial-scale=1,maximun-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="js/formulario.js"></script>
</head>
<body id="regis" onload="limpiar()">
 <header>
 	<div class="contenedor">
 		<h1>Biblioteca Isa</h1>
 		<input type="checkbox" id="menu-bar">
 		<label class="icon-menu" for="menu-bar"></label>
 		<nav class="menu">
 			<a href="inicio.php">Registrar Bibliotecario</a>
 			<a href="registrolobros.php">Registrar libros</a>
 			<a href="registroclientes.php">Registrar Cliente</a>	
 			<a href="registroprestamo.php">Prestamos</a>
 			<a href="">Devoluciones</a>
 			<a href="libros.php">Libros</a>
 			 <a href="bibliotecario.php">Bibliotecarios</a>
 			  <a href="clientes.php">Clientes</a>
 			
 			
 		</nav>
 		
 	</div>
 </header>
 <form  method="POST" >
	<h2>Registro libros</h2>
	<input type="text" id="idlibro" name="idlibro" placeholder="id">
	<input type="text" id="titulo" name="titulo" placeholder="titulo">
	<input type="text" id="autor" name="autor" placeholder="autor">
	<input type="text" id="editorial" name="editorial" placeholder="editorial">
	<input type="text" id="cantidad" name="cantidad" placeholder="cantidad">
	
	
	<input type="submit" value="Registrar" name="submit">

</form>
<?php 
	if(isset($_POST['submit'])){
			require("ABMlibros.php");
	}
?>
</body>
</html>