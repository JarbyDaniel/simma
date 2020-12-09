<?php

// PROGRAMA DE MENU ADMINISTRADOR
include "conexion.php";
                                                 
session_start();
if ($_SESSION["autenticado"] != "SIx3")
    {
      header('Location: index.php?mensaje=3');
    }
else
    {      
        $mysqli = new mysqli($host, $user, $pw, $db);
  	    $sqlusu = "SELECT * from tipo_usuario where id='2'"; //CONSULTA EL TIPO DE USUARIO CON ID=1, ADMINISTRADOR
        $resultusu = $mysqli->query($sqlusu);
        $rowusu = $resultusu->fetch_array(MYSQLI_NUM);
  	    $desc_tipo_usuario = $rowusu[1];
        if ($_SESSION["tipo_usuario"] != $desc_tipo_usuario)
          header('Location: index.php?mensaje=4');
    }
?>


    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
     <html>
       <head>
          <link rel="stylesheet" href="css/estilos_virtual.css" 			type="text/css">
           <title> Gestion Usuarios Adicionar </title>
        </head>
       <body>
        <table width="100%" align=center cellpadding=5 border=0 bgcolor="#FFFFFF">
    	   <tr>
           <td valign="top" align=left width=70%>
              <table width="100%" align=center border=0>
            	   <tr>
                  <td valign="top" align=center width=30%>
                     <img src="img/logo.jpg" border=0 width=100 height=80> 
             	    </td>
                  <td valign="top" align=center width=60%>
                     <h1><font color=green>Sistema de Monitoreo Automatizado </font></h1>
             	    </td>
           	    </tr>
         	    </table>
           </td>
           <td valign="top" align=right>
              <font FACE="arial" SIZE=2 color="#000000"> <b><u><?php  echo "Nombre Usuario</u>:   ".$_SESSION["nombre_usuario"];?> </b></font><br>
              <font FACE="arial" SIZE=2 color="#000000"> <b><u><?php  echo "Tipo Usuario</u>:   ".$desc_tipo_usuario;?> </b></font><br>  
              <font FACE="arial" SIZE=2 color="#00FFFF"> <b><u> <a href="cerrar_sesion.php"> Cerrar Sesion </a></u></b></font>  
           </td>
	     </tr>
<?php
include "menu_consul.php";


if ((isset($_POST["enviado"])))
  {
   //echo "grabar cambios modificaci�n";
   $Nombre = $_POST["Nombre"];
   $Cantidad = $_POST["Cantidad"];
   $Id_cultivo = $_POST["Id_cultivo"];
   $mysqli = new mysqli($host, $user, $pw, $db);
   $sqlcon = "SELECT * from inventario where Id_cultivo='$Id_cultivo'";
   $resultcon = $mysqli->query($sqlcon);
   $rowcon = $resultcon->fetch_array(MYSQLI_NUM);
   $numero_filas = $resultcon->num_rows;
  
   if ($numero_filas > 0)
     { 
     
         header('Location: inventario.php?mensaje=5');
     }
   else
    {
      $sql = "INSERT INTO inventario(Id_cultivo, Nombre, Cantidad) 
      VALUES ('$Id_cultivo','$Nombre','$Cantidad')";
      //echo "sql es...".$sql;
      $result1 = $mysqli->query($sql);
      
      if ($result1 == 1) 
        {
          header('Location: inventario.php?mensaje=3');
        }
      else
         header('Location: inventario.php?mensaje=4');
      
    }
}

else

{

   ?>
	
	   <tr valign="top">
                <td width="50%" height="20%" align="left" 				
                    bgcolor="#FFFFFF" class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
			    <font FACE="arial" SIZE=2 color="#000044"> <b><h1>Gestion cultivos </h1>  Adicionar cultivo</b></font>  
          

		       </td>
	          <td width="50%" height="20%" align="right" 				
                    bgcolor="#FFFFFF" class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
			  <img src="img/inventario_add.jpg" border=0 width=115 height=115>    
		       </td>
		     </tr>
   	     <tr>
                  <td colspan=2 width="25%" height="20%" align="left" 				
                    bgcolor="#FFFFFF" class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">

                   <form method=POST action="inventario_add.php">
                   <table width=50% border=1 align=center>
			    <tr>	
				<td bgcolor="#A8DDA8" align=center> 
				  <font FACE="arial" SIZE=2 color="#004400"> <b>Id cultivo</b></font>  
				</td>	
				<td bgcolor="#EEEEEE" align=center> 
				  <input type="number" name=Id_cultivo value="" required>  
				</td>	
       </tr>
	     <tr>
				<td bgcolor="#A8DDA8" align=center> 
				  <font FACE="arial" SIZE=2 color="#004400"> <b>Nombre cultivo</b></font>  
				</td> 	
				<td bgcolor="#EEEEEE" align=center> 
				  <input type="text" name=Nombre value="" required>  
				</td>	
			     </tr>
		     
	     <tr>
				<td bgcolor="#A8DDA8" align=center> 
				  <font FACE="arial" SIZE=2 color="#004400"> <b>cantidad</b></font>  
				</td>
				<td bgcolor="#EEEEEE" align=center> 
				  <input type="number" name=Cantidad value="" required>  
				</td>	
	     </tr>

      </table>
         </br>
         <input type="hidden" value="S" name="enviado">
         <table width=50% align=center border=0>
           <tr>  
             <td width=50%></td>                                                                       
             <td align=center><input style="background-color: #DBA926" type=submit color= blue value="Grabar" name="Modificar">
                  </form> 
             </td>  
             <td align=left>
                  <form method=POST action="inventario.php">                   
                  <input style="background-color: #EEEEEE" type=submit color= blue value="Volver" name="Volver">              
                  </form> 
             </td>  
           </tr>
                   </table>
                  </form> 
<br><br><hr>
                  </td>
                </tr>  

<?php
 }
?>

        </table>
        
       </body>
      </html>
