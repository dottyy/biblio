<?php
	$idlibro=$_POST['idlibro'];
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$editorial=$_POST['editorial'];
	$cantidad=$_POST['cantidad'];
	
	$reqlen=strlen($idlibro)*strlen($titulo)*strlen($autor)*strlen($editorial)*strlen($cantidad);
	if($reqlen>0){
	 	require("conexion.php");
		 mysql_query("INSERT INTO libros VALUES('$idlibro','$titulo','$autor','$editorial','$cantidad')");
		 mysql_close($link);
			echo '<script> alert("Se guardaron correctamente los datos.");</script>';
	}
	else{
		echo '<script> alert("Porfavor , llene todos los campos.");</script>';
	}
?>
