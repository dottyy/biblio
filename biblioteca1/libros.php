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
 			<a href="registrolibros.php">Registrar libros</a>
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
	<h2>Libros</h2>
<?php
  $con=mysqli_connect("localhost","root");
  mysqli_select_db($con,"biblioteca");
  $res=mysqli_query($con,"select * from libros");

  echo "<table border=1>";
  echo "<tr><th>codigo</th><th>nombre</th><th>autor</th><th>editorial</th><th>cantidad</th></tr>";

  //print_r($res);
  while (($reg=mysqli_fetch_row($res))!=null){
  	echo "<tr><td>";
  	 echo $reg[0] . "</td><td>"; 
  	 echo $reg[1] . "</td><td>";
  	 echo $reg[2] . "</td><td>";
  	 echo $reg[3] . "</td><td>";
  	 echo $reg[4] . "</td><td>"; 
  	 echo"<a href='edital.php?qcodl=$reg[0]'><img src='editar.jpg'></a></td><td>";
	 echo"<a href='eliminal.php?qcod=$reg[0]'><img src='eliminar.jpg'></a></td><td>";
  }
  echo "</table>";
  
?>
</form>
<?php 
	if(isset($_POST['submit'])){
			require("ABMclientes.php");
	}
?>
</body>
</html>