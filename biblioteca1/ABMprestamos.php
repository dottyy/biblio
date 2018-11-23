<?php
	$codcliente=$_POST['codcliente'];
	$codlibro=$_POST['codlibro'];
	$nombibliotecario=$_POST['nombibliotecario'];
	$fechap=$_POST['fechap'];

	$reqlen=strlen($codcliente)*strlen($codlibro)*strlen($nombibliotecario)*strlen($fechap);
	if($reqlen>0){
	 	require("conexion.php");
	 	 mysql_query(" update ");
		 mysql_query("INSERT INTO prestamos VALUES('$codcliente','$codlibro','$nombibliotecario','$fechap')");
		 mysql_close($link);
			echo '<script> alert("Se guardaron correctamente los datos.");</script>';
	}
	else{
		echo '<script> alert("Porfavor , llene todos los campos.");</script>';
	}
?>