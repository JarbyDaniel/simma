<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SIMMA</title>
	<script src="https://kit.fontawesome.com/8b93d6230e.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body >
	<nav class="nav">
		<a href="#inicio" class="marca">SIMMA</a>
		<ul id=menu class=menu>
			<li data-menuanchor="inicio" class='active'>
				<a href="#inicio">Inicio</a>
			</li>
			<li data-menuanchor="ingresa" >
					<a href="#ingresa">Ingresa</a>
			</li>
			<li data-menuanchor="unete">
						<a href="#unete">Nosotros</a>
			</li>
			<li data-menuanchor="contacto">
					<a href="#contacto">Contacto</a>
			</li>

		</ul>
	</nav>
	<main id="fullpage">
		<header class="section header">
			<div class="contenedor-titulo">
				<h1 class="titulo">
					<span class='texto-verde'>SIMMA</span>
				</h1>
				<p class="p">
					<span class='texto-negro'>
						Sistema de monitoreo para tus cultivos
					</span>

				</p>

			</div>
			<div class="contenedor-icono">
				<p><a href="#ingresa" class="texto-naranja"> <i class="fas fa-chevron-down"></i></a></p>
			</div>
		</header>
		<!-- <section class="section Productos">
			<div class="contenedor-titulo">
				<h1 class="titulo"><span class="texto-verde">
						Productos
					</span></h1>
			</div>

			<video loop muted data-autoplay class="bg-video">
				<source src="media/Reusa.mp4" type="video/mp4">
			</video>
		</section> -->
		<section class="section login">	
		<div id="login">   
          
          
          <form action="validar.php" class="formulario" method="post">
          <h1 class="h1">Hola de Nuevo!</h1>
            <div class="field-wrap">
            <label>Correo:<span class="req"></span></label>
            <input type="text"required value="" autocomplete="off" name="login1">
            
          </div>
          
          <div class="field-wrap">
            <label >
              Contraseña
            </label>
            <input type="password"required value="" autocomplete="off" name="passwd1">
            
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input class="button button-block" type=submit value="Enviar" name="Enviar"> 
          
    
          </form>

        </div>
        
      </div>
		</section>
	<section class="section login">
			
        <div class="servicios">   
          
        <table border= 0>
        <tr>
         <td >
           <h1 style="font-family:verdana"> Sistema Inteligente para la Medida y Monitorización en Agricultura</h1>
         </td>
 	     </tr>
    	 <tr>
         <td>
       
           <h2> Servicios: </h2>
            
          <ul>
          <li>Monitoreo en tiempo real de las condiciones climatol&oacute;gicas y ambientales del &aacute;rea que rodea los cultivos por medio de sensores que recolectan par&aacute;metros para la caracterizaci&oacute;n del suelo y agricultura inteligente.</li>
          <li>Sistema de notificaci&oacute;n de riego a partir de la humedad y las variables atmosf&eacute;ricas adquiridas, evitando trabajo extra a los productores proporcionando buenas decisiones de riego.</li>
          <li>Despliegue de cultivos controlados: La plataforma posee una interfaz que permite que el agricultor tenga r&aacute;pido acceso a todos sus cultivos, y filtrarlos seg&uacute;n una variable espec&iacute;fica.</li>
          <li>Control de inventario, donde el agricultor podr&aacute; administrar los insumos para cada uno de sus cultivos de forma r&aacute;pida y eficaz</li>
          <li>Sistema de alerta en caso de alguna eventualidad, como el cambio dr&aacute;stico de alguna variable ambiental que pueda afectar de manera negativa el cultivo</li>
          <li>Interfaz gr&aacute;fica que permite hacer comparaciones de la variaci&oacute;n de los par&aacute;metros captados por los sensores entre el d&iacute;a actual y otro d&iacute;a seg&uacute;n sea el requerimiento.</li>
          <li>Control inteligente: Con el objetivo de lograr el control de un cultivo en particular, el agricultor realiza distintas actividades relacionadas con su gesti&oacute;n, como cambio de cultivo (planta), ver informes relacionados a la actividad en su negocio (Riego, cosecha, clima, abono, etc).</li>
          </ul>
          
       
         </td>
 	     </tr>
       </table>
          
		</div>
	</section>
	<footer class="section footpage">
			<h2 class="texto-blanco">SIGUENOS EN REDES SOCIALES</h2>
			<p class="redes-sociales">
				<a href="" class="facebook"><i class="fab fa-facebook-square"></i></a>
				<a href="" class="instagram"><i class="fab fa-instagram"></i></a>
				<a href="" class="twitter"><i class="fab fa-twitter-square"></i></a>
			</p>
	</footer>
	</main>

	<script src="js/fullpage.js"></script>
	<script src="js/app.js"></script>
</body>

</html>