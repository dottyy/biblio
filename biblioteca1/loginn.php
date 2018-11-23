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
		
 	</div>
 </header>
 
	<h2>login</h2><br>

	<form name='login' method="POST" action='validarlogin.php'>
		<h2>login</h2><br><br>
	usuario: <input type="text" name="nombre"><br>
	password:<input type="password" name="password"><br>
	descripcion:<input type="text" name="descripcion"><br>
<input type="submit" value="Procesar">


</form>

</body>
</html>

