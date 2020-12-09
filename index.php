<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
  <html>
    <head>
    <style> 
		input[type=submit] {
  			background-color: #9A856A;
  			border: none;
	  		color: white;
  			padding: 8px 16px;
  			text-decoration: none;
	  		margin: 4px 2px;
  			cursor: pointer;
		}

		body {
 			background-image: url('img/fondo.jpg');
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: 100% 100%;
		}
	</style>
      <title> SIMMA
		  </title>
      <meta http-equiv="refresh" content="15" />
    </head>
    <body>

      <table width="80%" align=center cellpadding=5 border=1 bgcolor="#FFFFFF">
    	 <tr>
         <td valign="top" align=center width=70%  bgcolor="white"">
           <img src="img/invernadero.jpg" width=500 height=200>
         </td>
         <td valign="top" align=center width=30% bgcolor="white"">
           <h2 style="font-family:verdana"> <font color=#9FBC90>Ingreso de Usuarios </font></h2>
            <form method="POST" action="validar.php">
              <table width="100%" align=center border=0 bgcolor=white>
  	            <tr>
                  <td width="25%" height="20%" align="center" 				
                    bgcolor=#9FBC90 class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
         		       Usuario:
                  </td>
                  <td width="25%" height="20%" align="center" 				
                    bgcolor=#9FBC90 class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
                     <input type=text value="" name="login1" required> 
                  </td>
                </tr>  
  	            <tr>
                  <td width="25%" height="20%" align="center" 				
                    bgcolor=#9FBC90 class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
                    Password:
                  </td>
                  <td width="25%" height="20%" align="center" 				
                    bgcolor=#9FBC90 class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
                     <input type=password value="" name="passwd1" required> 
                  </td>
                </tr>  
  	            <tr>
                  <td width="25%" height="20%" align="center" 				
                    bgcolor=#9FBC90 class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
                    &nbsp;&nbsp;
                  </td>
                  <td width="25%" height="20%" align="center" 				
                    bgcolor=#9FBC90	 class="_espacio_celdas" 					
                    style="color: #FFFFFF; 
			             font-weight: bold">
                   <input type=submit value="Enviar" name="Enviar"> 
                  </td>
                </tr>  
                <?php
                if (isset($_GET["mensaje"]))
                 {
                 $mensaje = $_GET["mensaje"];
                    if ($_GET["mensaje"]!=""){
                ?>
  	            <tr>
                  <td width="25%" height="20%" align="center" 				
                    bgcolor="#FFCCCC" class="_espacio_celdas_p" 					
                    style="color: #FF0000; 
			             font-weight: bold">
                    <u>Datos Incorrectos:</u>
                  </td>
                  <td width="25%" height="20%" align="left" 				
                    bgcolor="#FFDDDD" class="_espacio_celdas_p" 					
                    style="color: #FF0000; 
			             font-weight: bold">
                    <?php 
                       if ($mensaje == 1)
                         echo "El password del usuario no coincide.";
                       if ($mensaje == 2)
                         echo "No hay usuarios con el login (usuario) ingresado o est� inactivo.";
                       if ($mensaje == 3)
                         echo "No se ha logueado en el Sistema. Por favor ingrese los datos.";
                       if ($mensaje == 4)
                         echo "Su tipo de usuario, no tiene las credenciales suficientes para ingresar a esta opci�n.";
                    ?>                         
                  </td>
                </tr>  
                <?php 
                   }
                 }
                ?>
               </table>  
             </form> 
         </td>
 	     </tr>
 	     <tr>
         <td valign="top" align=center width=80& colspan=2 bgcolor=#618255>
           <h1 style="font-family:verdana"> <font color=white>Sistema Inteligente para la Medida y Monitorización en Agricultura</font></h1>
         </td>
 	     </tr>
    	 <tr>
         <td valign="top" align=left width=80& colspan=2 bgcolor="#C8DDC8">
       
           <h2> <font color=black>Servicios </font></h2>
           <p align=justify> <font color=#555555 size=3>
           
          <ul>
          <li><span style="font-weight: 400;">Monitoreo en tiempo real de las condiciones climatol&oacute;gicas y ambientales del &aacute;rea que rodea los cultivos por medio de sensores que recolectan par&aacute;metros para la caracterizaci&oacute;n del suelo y agricultura inteligente.</span></li>
          <li><span style="font-weight: 400;"></span> <span style="font-weight: 400;">Sistema de notificaci&oacute;n de riego a partir de la humedad y las variables atmosf&eacute;ricas adquiridas, evitando trabajo extra a los productores proporcionando buenas decisiones de riego.</span></li>
          <li><span style="font-weight: 400;"></span> <span style="font-weight: 400;">Despliegue de cultivos controlados: La plataforma posee una interfaz que permite que el agricultor tenga r&aacute;pido acceso a todos sus cultivos, y filtrarlos seg&uacute;n una variable espec&iacute;fica.</span></li>
          <li><span style="font-weight: 400;"></span> <span style="font-weight: 400;">Control de inventario, donde el agricultor podr&aacute; administrar los insumos para cada uno de sus cultivos de forma r&aacute;pida y eficaz</span></li>
          <li><span style="font-weight: 400;"></span> <span style="font-weight: 400;">Sistema de alerta en caso de alguna eventualidad, como el cambio dr&aacute;stico de alguna variable ambiental que pueda afectar de manera negativa el cultivo</span></li>
          <li><span style="font-weight: 400;"></span> <span style="font-weight: 400;">Interfaz gr&aacute;fica que permite hacer comparaciones de la variaci&oacute;n de los par&aacute;metros captados por los sensores entre el d&iacute;a actual y otro d&iacute;a seg&uacute;n sea el requerimiento.</span></li>
          <li><span style="font-weight: 400;"></span> <span style="font-weight: 400;">Control inteligente: Con el objetivo de lograr el control de un cultivo en particular, el agricultor realiza distintas actividades relacionadas con su gesti&oacute;n, como cambio de cultivo (planta), ver informes relacionados a la actividad en su negocio (Riego, cosecha, clima, abono, etc).</span></li>
          </ul>
          </font></p>
       
         </td>
 	     </tr>
       </table>
     </body>
   </html>