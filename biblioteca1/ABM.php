<?php
	$carnet=$_POST['carnet'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$password=$_POST['password'];
	$descripcion=$_POST['descripcion'];
	$reqlen=strlen($carnet)*strlen($nombre)*strlen($apellido)*strlen($correo)*strlen($telefono)*strlen($password)*strlen($descripcion);
	if($reqlen>0){
	 	require("conexion.php");
		 mysql_query("INSERT INTO bibliotecario VALUES('$carnet','$nombre','$apellido','$correo','$telefono','$password','$descripcion')");
		 mysql_close($link);
			echo '<script> alert("Se guardaron correctamente los datos.");</script>';
	}
	else{
		echo '<script> alert("Porfavor , llene todos los campos.");</script>';
	}
?>
