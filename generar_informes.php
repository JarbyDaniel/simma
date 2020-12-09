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
        $mysqli1 = new mysqli($host, $user, $pw, $db);
  	    $sqlusu = "SELECT * from tipo_usuario where id='1'"; //CONSULTA EL TIPO DE USUARIO CON ID=1, ADMINISTRADOR
        $resultusu = $mysqli1->query($sqlusu);
        $rowusu = $resultusu->fetch_array(MYSQLI_NUM);
  	    $desc_tipo_usuario = $rowusu[1];
        if ($_SESSION["tipo_usuario"] != $desc_tipo_usuario)
          header('Location: index.php?mensaje=4');
    }

    $mysqli = new mysqli($host,$user,$pw,$db) or die($mysqli->error);

    $temperatura = '';
    $humedad = '';
  
    //query to get data from the table
    $sql2 = "SELECT * FROM datos_medidos";
      $result = mysqli_query($mysqli, $sql2);
  
    //loop through the returned data
    while ($row = mysqli_fetch_array($result)) {
  
      $temperatura = $temperatura . '"'. $row['temperatura'].'",';
      $humedad = $humedad . '"'. $row['humedad'] .'",';
    }
  
    $temperatura = trim($temperatura,",");
    $humedad = trim($humedad,",");

?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
     <html>
       <head>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
           <title> Generar Informes</title>
        </head>
       <body>
        <table width="100%" align=center cellpadding=5 border=0 bgcolor="#FFFFFF">
    	   <tr>
           <td valign="top" align=left width=70%>
              <table width="100%" align=center border=0>
            	   <tr>
                  <td valign="top" align=center width=30%>
                  <img src="img/logo.jpg" border=0 width=180 height=180> 
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
     </table>
    <table width="100%" align=center cellpadding=5 border=0 bgcolor="#FFFFFF">
<?php
include "menu_admin.php";
?>
 	    <tr valign="top">
         <td height="20%" align="left" 				
            bgcolor="#FFFFFF" class="_espacio_celdas" 					
            style="color: #FFFFFF; 
            font-weight: bold">
    		    <font FACE="arial" SIZE=2 color="#000044"> <b><h1>Generar Informes</h1></b></font>  
	       </td>
         <td height="20%" align="right" 				
             bgcolor="#FFFFFF" class="_espacio_celdas" 					
             style="color: #FFFFFF; 
            font-weight: bold">
    			  <img src="img/generar_informes.jpg" border=0 width=115 height=115>    
		     </td>
	    </tr>
	  </table>
    <div class="container">	
	    <h1>Temperatura y humedad</h1>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: [1,2,3,4,5,6,7,8,9],
		            datasets: 
		            [{
		                label: 'Temperatura',
		                data: [<?php echo $temperatura; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },

		            {
		            	label: 'Humedad',
		                data: [<?php echo $humedad; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
<br><br><hr>
    
 </body>
</html>


   
