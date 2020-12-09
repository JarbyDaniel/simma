<?php

// PROGRAMA DE MENU CONSULTA
include "conexion.php";
                                                 
session_start();
if ($_SESSION["autenticado"] != "SIx3")
    {
      header('Location: index.php?mensaje=3');
    }
else
    {      
        $mysqli = new mysqli($host, $user, $pw, $db);
  	    $sqlusu = "SELECT * from tipo_usuario where id='2'"; //CONSULTA EL TIPO DE USUARIO CON ID=2, CONSULTA
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
           <title> Inventario
           <meta http-equiv="refresh" content="15" />
           </title>
        </head>
       <body>
        <table width="100%" align=center cellpadding=5 border=0 bgcolor="#FFFFFF">
    	   <tr>
           <td valign="top" align=left width=70%>
              <table width="100%" align=center border=0>
            	   <tr>
                  <td valign="top" align=center width=30%>
                     <img src="img/logo.jpg" border=0 width=200 height=200> 
             	    </td>
                  <td valign="top" align=center width=60%>
                     <h1><font SIZE=7 color=green> Sistema de Monitoreo Automatizado </font></h1>
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
     </table>
    <table width="100%" align=center cellpadding=5 border=0 bgcolor="#FFFFFF">
<?php
include "menu_consul.php";
?>
	  	    <tr valign="top">
             <td height="20%" align="left" 				
                    bgcolor="#FFFFFF" class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
			    <font FACE="arial" SIZE=2 color="#000044"> <b><h1>Inventario</h1></b></font>  


		       </td>
	          <td height="20%" align="right" 				
                    bgcolor="#FFFFFF" class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
			  <img src="img/inventario.png" border=0 width=115 height=115>    
		       </td>
		     </tr>
		    </table>

        <tr>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
        <td align=center>
          <a href="inventario_add.php"> <b>Agregar Nuevo Cultivo </b></a>    
        </td>
         </tr>
    <table width="70%" align=center cellpadding=5 border=0 bgcolor="#FFFFFF">
       <tr>
         <td valign="top" align=center width=80& colspan=6 bgcolor="green"">
           <h2> <font color=white>Lista de inventario</font></h2>
         </td>
 	     </tr>
    	 <tr>
         <td valign="top" align=center bgcolor="#E1E1E1">
            <b>Id cultivo</b>
         </td>
         <td valign="top" align=center bgcolor="#E1E1E1">
            <b>Nombre</b>
         </td>
         <td valign="top" align=center bgcolor="#E1E1E1">
            <b>Cantidad</b>
         </td>
 	     </tr>
<?php

$mysqli = new mysqli($host, $user, $pw, $db);
$id_usuario1 = $_SESSION["id_usuario"];
$sqlusu1 = "SELECT * from usuarios where id='$id_usuario1'"; //CONSULTA EL ID TARJETA DEL USUARIO LOGUEADO
//echo "sqlusu1 ...".$sqlusu1;
$resultusu1 = $mysqli->query($sqlusu1);
$rowusu1 = $resultusu1->fetch_array(MYSQLI_NUM);
$id_tarjeta= $rowusu1[8];


// la siguiente linea almacena en una variable denominada sql1, la consulta en lenguaje SQL que quiero realizar a la base de datos. Se consultan los datos de la tarjeta 1, porque en la tabla puede haber datos de diferentes tarjetas.
$sql1 = "SELECT * from inventario"; // Aqu� se guarda en la variable sql la sentencia de consulta a realizar
// la siguiente l�nea ejecuta la consulta guardada en la variable sql, con ayuda del objeto de conexi�n a la base de datos mysqli
//echo "sql1 ...".$sql1;
$result1 = $mysqli->query($sql1);
// la siguiente linea es el inicio de un ciclo while, que se ejecuta siempre que la respuesta a la consulta de la base de datos
// tenga alg�n registro resultante. Como la consulta arroja 5 resultados, los �ltimos que tenga la tabla, se ejecutar� 5 veces el siguiente ciclo while.
// el resultado de cada registro de la tabla, se almacena en el arreglo row, row[0] tiene el dato del 1er campo de la tabla, row[1] tiene el dato del 2o campo de la tabla, as� sucesivamente
$contador = 0;
while($row1 = $result1->fetch_array(MYSQLI_NUM))
{
 $Id_cultivo = $row1[0];
 $Nombre = $row1[1];
 $Cantidad = $row1[2];
?>
    	 <tr>

         <td valign="top" align=center>
           <?php echo $Id_cultivo; ?> 
         </td>
         <td valign="top" align=center>
           <?php echo $Nombre; ?> 
         </td>
         <td valign="top" align=center>
           <?php echo $Cantidad; ?> 
         </td>
 	     </tr>
<?php
}
?>
       </table>
       <hr>
       <br><br>
     </body>
   </html>