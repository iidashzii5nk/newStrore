<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3BPTATTOO</title>
	<link rel="stylesheet" type="text/css" href="css/iconos-menu.css">
	<link rel="stylesheet" type="text/css" href="css/styleflex.css">




	<script src="https://kit.fontawesome.com/def3cb64a1.js" crossorigin="anonymous"></script><!--FotAwesome-->

  

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script><!--Es un CDN para poder hacer que funcione el jquery menu.js-->


     
     <script src="js/fot.js"></script>



	<!--Script del carouse comecio-->
	<script src="http://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!--Script del carouse comecio-->
</head>
<body>
<!--************************************************************-->	
<!------------Contenedor Logo-------------------------------------->
<div class="cont-prin">
<div class="ctn-1"><img class="logo" src="imagenes/logop.jpg"></div>
		    <!--Contenedor del buscador-->
<div class="ctn-2">
	<input type="text" class="src-prin" name="search" class="src"
	 placeholder="Buscar en nuestra tienda" autocomplete="off">
	 <i class="srcp fas fa-search"></i>
</div>
      <!--Contenedor negro carrito--> 
 <div class="ctn-3">
 	<div class="ctn-car">
 <div class="ctncarc">
 	<span class="carito">
 		<i class="car fas fa-shopping-cart"></i>
 		CARRITO
 		<span class="vacio">Vacío</span>
 	</span>	
 	<div class="inisesion">
 	<a href="">
 		<i class="fas fa-arrow-right"></i>
 		Iniciar sesión
 	</a>
 </div>
 </div>
 
 	</div>
 </div>
</div>
<!--************************************************************-->
<header>
	<input type="checkbox" id="btn-menu">
    <label class="icon-th-list" for="btn-menu"></label>

<!------Barra de menu Respons-------------------------------->

<div class="conten-respons"><!--Barra de menu Respons-->
<div id="ctn-icon-search">
	<i class="icon-search" id="icon-search"></i>
</div>
<div id="ctn-icon-cancel">
	<i class="icon-cancel" id="icon-cancel"></i>
</div>
		<div class="cont-respons-logo">
			<img class="logo-tattoo" src="imagenes/logo-black.jpg">
		</div>
		<div class="cont-car-respons">
      		<span class="icon-basket"></span>
      	</div>

</div>
<!------Barra de menu Respons-------------------------------->

<nav class="menu">

   		<ul>
   			<li class="icono-home"><a href="#"><span class="icon-home"></span></a></li>
   	    <li class="submenu"><a id="sub" href="#"><span class="icon-droplet"></span>INK<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">INTENZE INK</a></li>
		<li><a href="#">SOLID INK</a></li>
		<li><a href="#">ETERNAL INK</a></li>
		<li><a href="#">RADIANT COLORS</a></li>
		<li><a href="#">DINAMIC INK</a></li>
		<li><a href="#">STARBRITER COLORS</a></li>
		<li><a href="#">PIGMENTOS NEGROS</a></li>
		<li><a href="#">SETS DE PIGMENTOS</a></li>
		</ul>
		</li>
		<li class="submenu"><a href="#"><span class="icon-deviantart"></span>MÁQUINAS<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">ROTATIVAS</a></li>
		<li><a href="#">BOBINAS</a></li>
		<li><a href="#">KITS DE TATUAJES</a></li>
		</ul>
		</li>
		<li><a href="#"><span class="icon-pinboard"></span>AGUJAS Y GRIPS</a></li>
		<li><a href="#"><span class="icon-off"></span>FUENTES</a></li>
		<li><a href="#"><span class="icon-paste"></span>ESTÉNCIL</a></li>
		<li class="submenu"><a href="#"><span class="icon-box"></span>ACCESORIOS<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">AGUJAS, GRIPS Y PUNTERAS</a></li>
		<li><a href="#">FUENTES DE PODER</a></li>
		<li><a href="#">PEDALES Y CLIPCORD</a></li>
		<li><a href="#">ASEPSIA Y CUIDADO</a></li>
		<li><a href="#">ACCESORIOS</a></li>
		<li><a href="#">ATENCIL</a></li>
		<li><a href="#">MAQUILLAJE PERMANENTE</a></li>
		<li><a href="#">MOBILIARIO</a></li>
		<li><a href="#">DIBUJO</a></li>
		<li><a href="#">LIBROS</a></li>
        </ul>
		</li>
		<li><a href="#"><span class="icon-resize-vertical"></span>PIERCING</a></li>
		<li><a id="modificado" href="#"><span class="icon-certificate"></span>PROMOS!</a></li>
	</ul>
     </nav>

</header>









<div class="autent">
	<div class="sbautent">
		<div class="homen">
			<a href="index.html">
				<i class="fas fa-home"></i>
			</a>
			<div class="aut">
				<a href="iniciosesion.html">
           <h6> > Autenticación </h6>
           </a>
           </div>

		</div>


		<div class="creacuent">
			<h1>Crear cuenta</h1>
				<div class="sbcreacnt">
					<div class="cntaregis">
						

					

<!---------------------FORMULARIO PARA REGISTRARSE--------------------------------------------->				
						<form action="insertar.php" method="post">
							<div class="requerido">
								<h3>DATOS PERSONALES</h3>
								<p>*Campos requeridos</p>
							</div>
							
							
							<div class="formail">
								<label>Nombre*</label><br>
								<input name="name" type="text" placeholder="Nombre" required>
							</div>

							<div class="formail">
								<label>Correo electrónico*</label><br>
								<input name="email" type="email" placeholder="email" required>
							</div>

							<div class="formail">
								<label>Contraseña*</label><br>
								<input name="password" type="pass" placeholder="Contraseña" required>
							</div>

    							<div class="btnsubmi">
								<input type="submit" name="register">
								
							</div>
						</form>
					
					</div>
						
				</div>
			</div>
	</div>
</div>
<!--------------------ACA ACABA EL FORMULARIO PARA EL REGISTRO DEL USUARIO  EN LA BD----------->



<div class="ctn-fomulario">
	
<div class="ctn-form">

  <section class="formulario">
   	
   	<ul>
   		<li class="desplegar"><h4>Información</h4>
        <ul>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Promociones especiales</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Novedades</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Los más vendidos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Contáctenos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Inicio</a></li>
        	<h6>Developed by @ii5nkiifrancisco</h6>
        </ul>
   		</li>
   	</ul>
</section>

<section class="formulario">
	<ul>
   		<li class="desplegar"><h4>Mi cuenta</h4>
        <ul>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis pedidos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis facturas por abono</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis direcciones</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis datos personales</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis cupones de descuento</a></li>
        </ul>
   		</li>
   	</ul>
</section>

<section class="formulario">
   	
 <ul>
   		<li class="desplegar"><h4>Información sobre la tienda</h4>

        <ul>
        <li>
        	<h5>Tattoo store</h5>
        	<i class="map fas fa-map-marker-alt"></i>
        	<h3>Calle 4 # 11 - 48</h3>
    </li>
        <li>
         <i class="phon fas fa-phone-alt"></i>
             <h3>Llamanos ahora: 3203927907</h3>
    </li>
    <li>
    	<i class="mail far fa-envelope"><h3>E-mail: contacto@tattoostore.com</h3></i>
          
    </li>

        </ul>
   		</li>
</ul>
</section>

<section class="formulario">
   	<ul>
   		<li class="desplegar"><h4>Siguenos en</h4>
        <ul>
        	<li>
        	<i class="face fab fa-facebook-square"></i>
        	<i class="insta fab fa-instagram-square"></i>
        	<i class="you fab fa-youtube-square"></i>
        	<i class="twit fab fa-twitter"></i>
        </li>
        <li>
        	<h2>Boletín</h2>
        </li>
        <li class="item">
        	<form action="" method="post">
        		<input type="text" name="email" size="18"
        		placeholder="Introduzca su dirección de correo electronico">
                <button type="sumbit"><i class="righ fas fa-chevron-right"></i></button>
        	</form>
        	<span><h2>Registrece para recibir las últimas noticias y actualizaciones
        	directamente en su bandeja de entrada</h2>
        </li>

        </ul>
   		</li>
</ul>
    </section>
</div>
</div>
<!--*****Formulario quienes somos*********************************-->


<!--*****Creador y modo de pagos*********************************-->

<div class="pagcredit">
	<div class="ctn-cp">
		<div class="devpagos">
			<h6>©2020 Powered by 3BPTATTOO. Todos los derechos reservados.</h6>
			<!--Para sacar el Copyright derechos de autos alt +0169-->
		</div>
		<div class="pagos">
			<img src="imagenes/credito-pagos.jpg" alt="">
		</div>
	</div>
</div>
<!--*****Creador y modo de pagos*********************************-->

<!--*****Footer Negro*********************************-->
<div class="footerblack">
	<div class="emoji-descuent">
       <div class="emojicenter">
     <div>
	 <img src="imagenes/iconfinder_Emoji.png" alt="" >
	 </div>
	 <div>
	 <a href="#">Agujas de cartucho 25%OFF</a>
	 </div>
	 <div>
	 <img src="imagenes/iconfinder_Emoji.png" alt="" >
	 </div>
       </div>
	</div>
</div>

<!--*****Footer Negro*********************************-->
</body>
</html>