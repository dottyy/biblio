<?php
	$idcliente=$_POST['idcliente'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$ci_cliente=$_POST['ci_cliente'];
	$direccion=$_POST['direccion'];
	
	$reqlen=strlen($idcliente)*strlen($nombres)*strlen($apellidos)*strlen($ci_cliente)*strlen($direccion);
	if($reqlen>0){
	 	require("conexion.php");
		 mysql_query("INSERT INTO clientes VALUES('$idcliente','$nombres','$apellidos','$ci_cliente','$direccion')");
		 mysql_close($link);
			echo '<script> alert("Se guardaron correctamente los datos.");</script>';
	}
	else{
		echo '<script> alert("Porfavor , llene todos los campos.");</script>';
	}
?>
