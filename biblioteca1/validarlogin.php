<?php

session_start();
$nombre = $_REQUEST['nombre'];
$password = $_REQUEST['password'];
$descripcion = $_REQUEST['descripcion'];


//echo $nombre . " " . $password;
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"biblioteca");
$sql="select count(*) from bibliotecario where nombre='$nombre' and password=md5('$password')";

$sql2="select * from bibliotecario where descripcion='$descripcion'";
$res=mysqli_query($con,$sql);
$nr=mysqli_fetch_row($res);
$n2=mysqli_fetch_row($sql2);



//echo "<br>" , $nr[0];
if ($nr[0]==1){

	if ($n2[6]=='administrador'){

		header("location:inicio.php");

	}else{
		//echo "error en autentificacion";
		header("location:loginn.php");
	}
 }
 if ($nr[0]==0){
		//echo "error en autentificacion";
		header("location:loginn.php");
	}
	/*else{
		echo '<script>alert("procesando!!");</script>';
		header("location:inicio.php");
		
	}*/




	/*if ($nr[6]=='bibliotecario')
	{
		header("location:libros.php");
	}
	else

	{
		echo "error en autentificacion";
		header("location:loginn.php");
	}*/
	//$_SESSION['bibliotecario']=$nombre;
	//header("location:inicio.php");

?>

