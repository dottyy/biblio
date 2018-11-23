<?php
 $con=mysqli_connect("localhost","root");
 mysqli_select_db($con,"biblioteca");
 $sqlprv="select * from clientes where apellidos!='X'";
 $rprv=mysqli_query($con,$sqlprv);
 
 $sqlp="select * from bibliotecario where nombre!='X'";
 $rbiblio=mysqli_query($con,$sqlp);

 /*$sqlp="select * from libros where tipo!='X'";
 $rpro=mysqli_query($con,$sqlp);*/
?>  
            <h5>COMPRAS</h5>
		        <hr size=1>		        
		        <br><center>
		            <form name='vpro' action='#' method='POST'>
                <table>
                <tr>
                  <td>C&oacute;digo de Cliente :</td><td>
                      <select name="qprv" id='qprv'>
                          <?php
                          while (($pp=mysqli_fetch_row($rprv))!=null){
                              echo "<option value='$pp[0]'>$pp[0]</option>";
                          }
                          ?>
                      </select> 

                      <td>Nombre Bibliotecario  :</td><td>
                      <select name="qbi" id='qbi'>
                          <?php
                          while (($pp=mysqli_fetch_row($rbiblio))!=null){
                              echo "<option value='$pp[0]'>$pp[1]</option>";
                          }
                          ?>
                      </select>
                  <script language='javascript'>
                       document.getElementById("qprv").focus();
                  </script>
                </td></tr>
                <tr>
                  <td>Cantidad:       </td><td><input type="text" name="qcan"></td></tr>
                <tr><td>Precio Compra:   </td><td><input type="text" name="qcosto"></td></tr>
                <tr><td colspan=2><br><hr><br></td></tr>
                <tr><td><input type="submit" value="Procesar"></td><td><input type="reset" value="Cancelar"></td></tr>
                </form>
                <?php 
          if(isset($_POST['submit'])){
               require("ABM.php");
                }
                ?>
                </table>
                <br>                
		        <hr size=1>
		        <p>&nbsp;</p></td>
		      </tr>
		    </table>

		<!-- InstanceEndEditable -->
