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


<?php
 $con=mysqli_connect("localhost","root");
 mysqli_select_db($con,"biblioteca");
 $sqlprv="select * from clientes where id_cli!='X'";
 $rprv=mysqli_query($con,$sqlprv);

 $sqlib="select * from libros where cod_lib!='X'";
 $rlib=mysqli_query($con,$sqlib);
 
 $sqlp="select * from bibliotecario where nombre!='X'";
 $rbiblio=mysqli_query($con,$sqlp);

 $rest ="select cantidad  from libros ";
 
 $restar=$rest-1;
  /*$sqlp="select * from libros where tipo!='X'";
 $rpro=mysqli_query($con,$sqlp);*/
?>  
           <form method="POST" name="ABMpres" action="ABMprestamos.php" method="POST" >
  			<h2>Registro de prestamo</h2>
		        <hr size=1>		        
		        <br><center>
		         
                <table>
                <tr>
                  <td>C&oacute;digo de Cliente :</td><td>
                      <select name="codcliente" id='codcliente'>
                          <?php
                          while (($pp=mysqli_fetch_row($rprv))!=null){
                              echo "<option value='$pp[0]'>$pp[0]</option>";
                          }
                          ?>
                      </select> </td></tr>
                       <td>codigo de libro :</td><td>
                      <select name="codlibro" id='codlibro'>
                          <?php
                          while (($pp=mysqli_fetch_row($rlib))!=null){
                              echo "<option value='$pp[0]'>$pp[0]</option>";
                          }
                          ?>
                      </select> </td></tr>


                      <td>Nombre Bibliotecario  :</td><td>
                      <select name="nombibliotecario" id='nombibliotecario'>
                          <?php
                          while (($pp=mysqli_fetch_row($rbiblio))!=null){
                              echo "<option value='$pp[1]'>$pp[1]</option>";
                          }
                          ?>
                      </select>
                  <!--<script language='javascript'>
                       document.getElementById("qprv").focus();
                  </script>-->
                </td></tr>
                <tr>
                  <td>fecha de prestamo:  </td><td><input type="text" name="fechap"></td></tr>

                
               
                <tr><td colspan=2><br><hr><br></td></tr>
                <tr><td><input type="submit" value="Procesar"></td><td>
                	<input type="reset" value="Cancelar"></td></tr>
                </form>
                
                </table>
                          
		        
		      </tr>
		    </table>
