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

 			<a href="">Registrar Bibliotecario</a>
 			<a href="registrolibros.php">Registrar Libro</a>
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
	<h2>Registro de Bibliotecarios</h2>
	<input type="text" id="id" name="carnet" placeholder="C.I.">
	<input type="text" id="Nombre" name="nombre" placeholder="Nombre">
	<input type="text" id="Apellido" name="apellido" placeholder="Apellidos">
	<input type="text" id="Correo" name="correo" placeholder="Correo">
	<input type="text" id="Telefono" name="telefono" placeholder="Fijo o Celular">
	<input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
	<input type="text" id="descripcion" name="descripcion" placeholder="descripcion">
	
	<input type="submit" value="Registrar" name="submit">

</form>
<?php 
	if(isset($_POST['submit'])){
			require("ABM.php");
	}
?>
</body>
</html>