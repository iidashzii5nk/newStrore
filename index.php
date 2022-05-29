<?php
//session_start();
?>
<?php

include('servicios/conexionPDO.php');
include('carrito.php'); //validar si quitando este include funciona


?>


<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3BPTATTOO</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/iconos-menu.css">


	<link rel="stylesheet" type="text/css" href="css/styleflex.css">


	<!--Link de Boostrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!--Scripts para la funcionalidad de boostrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<!--Scripts para la funcionalidad de boostrap-->


	<script src="https://kit.fontawesome.com/def3cb64a1.js" crossorigin="anonymous"></script>
	<!--FotAwesome-->



	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!--Es un CDN para poder hacer que funcione el jquery menu.js-->


</head>

<body style="background-color: #000;">








	<div class="cont-prin">

		<div class="caja" id="ctn-bars-search">
			caja1
		</div>

		<div class="caja2">

			<div class="buscador">


			</div>
		</div>

		<div class="caja3">

		</div>



		<header>
			<input type="checkbox" id="btn-menu">
			<label class="icon-th-list" for="btn-menu"></label>


			<?php
			error_reporting(0); // En el inicio de sesion quitar el error que dice variable de sesion no existe.
			?>

			<nav class="menu">

				<ul>
					<li class="icono-home"><a href="index.php"><span class="icon-home"></span></a></li>
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
					
					<li><a href="#"><span class="icon-off"></span>FUENTES</a></li>
					
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


					<li><a><i class="srcp fas fa-search"></i></a></li>
					<!--Icono de carrito-->
					<li class="conti-carrito">

						<a href="mostrarCarrito.php">CARRITO(<?php

																/*empty vacio si el carrito esta vacio
    el operador ternario ?el primer valor es si 0: el segundo valor es no // la funcion count= contar
    la cantidad de productos agregados*/
																echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);

																?>)
							<i class="car fas fa-shopping-cart"></i></a>
					</li>




					<li><a href="formValidarsesion.php">
							<!--Icono de iniciar sesion--><i class="fas fa-arrow-right">
								<!--Mostrar el usario logueado-->
							</i></a></li>
					
					<li><a>
							<h2><?php echo $_SESSION['user'] ?></h2>
						</a></li>
					<li><a href="cerrarsesion.php">Cerrar sesion</a></li>


				</ul>

			</nav>

		</header>

	</div>





	<!--******************Slider********************************************-->


	<div class="ctn-slider">
		<ul>
			<li><img src="imagenes/1.jpg"></li>
			<li><img src="imagenes/1.jpg"></li>
			<li><img src="imagenes/1.jpg"></li>
		</ul>

	</div>
	<!--*****Slider*******-->

	<!--*****PRODUCTOS DEL CARRITO*******-->
	

<div>
<?php
    $sentencia = $con->prepare("SELECT * FROM picmentos");
    $sentencia->execute();
    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($listaProductos);//Es para obtener los productos y ver la estructura en array[]
    ?>
    <?php foreach ($listaProductos as $producto) { ?>

        <div><!-- Llama los datos marca nombre y precio-->
        <img src="<?php echo $producto['imagen'] ?>" title="<?php echo $producto['imagen'] ?>">
            <p><?php echo $producto['marca'] ?></p>
            <p><?php echo $producto['nombre'] ?></p>
            <h5>$<?php echo $producto['precio'] ?></h5>
            


            <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $producto['id'] ?>">
                <input type="hidden" name="marca" id="marca" value="<?php echo $producto['marca'] ?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre'] ?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio'] ?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

                <input type="hidden" name="imagen" id="imagen" value="<?php echo $producto['imagen'] ?>">


                <button name="btnAccion" value="Agregar" type="submit">

                    Agregar carrito

                </button>

            </form>



        </div>





    <?php } ?>

</div>


	<!--*****PRODUCTOS DEL CARRITO*******-->

	<!--*****Contendor amarillo Promociones*******-->

	<div class="promociones">
		<div class="promociones-1">
			<h1 class="ltr-promo">Promociones <h1 class="on-sale">ON SALE!</h1>
			</h1>
		</div>
	</div>

	<!--*****Contendor amarillo Promociones*******-->


	<!--*****Modo de pagos***************************************-->
	<div class="ctn-pagos">
		<div class="ctn-pagos-prin">
			<div class="ctn-pag"><i class="iconpagos fas fa-dolly"></i>
				<h1 class="title">DESPACHOS NACIONALES</h1>
			</div>
			<div class="ctn-pag"><i class="iconpagos fas fa-lock"></i>
				<h1 class="title">PAGO SEGURO</h1>
			</div>
			<div class="ctn-pag"><i class="iconpagos fas fa-comments"></i>
				<h1 class="title-ases">ASESORIA PERSONALIZADA</h1>
			</div>
			<div class="ctn-pag"><i class="iconpagos fas fa-handshake"></i>
				<h1 class="title">PAGO CONTRA ENTREGA</h1>
			</div>
		</div>

	</div>

	<!--*****Modo de pagos***************************************-->



	<!--*****Banner***************************************-->

	<div class="banner">
		<div class="ctn-banner"><img class="bn" src="imagenes/banner.png" alt=""></div>
	</div>

	<!--*****Banner***************************************-->



	<!--*****Puntos Descuantos***************************************-->

	<div class="descuentos">
		<div class="ctn-des">

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/maquina-tatto.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>


			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/fuente.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/pigment.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/cartuchos.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>


			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/clipcord.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/stencil.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/asepsia.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/accesorios.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>


			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/muebles.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/libros.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/dibujo.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>

			<div class="ctn-puntos">
				<img class="img-hover" src="imagenes/piercing.png" alt="">
				<div class="ctn-efecto">
				</div>
			</div>
		</div>
	</div>

	<!--*****Puntos Descuantos***************************************-->



	<div class="promociones">
		<div class="promociones-1">
			<h1 class="ltr-promo">Top 5</h1>
			<h1 class="masven">Más vendidos!</h1>
		</div>
	</div>

	<!--*****Top  5 Mas vendido***************************************-->

	<!--*****Cards 5 productos mas vendidos*********************************-->



	<!--*****Cards 5 productos mas vendidos*********************************-->

	<!--*****CURSOS CERTIFICACIONES GALLERY*********************************-->

	<div class="curcer">
		<div class="ctn-curcer">
			<div class="curcergalery">
				<img class="img-cucega" src="imagenes/cursos.png" alt="">
				<div class="efec-luz-blanca"></div>
			</div>
			<div class="curcergalery">
				<img class="img-cucega" src="imagenes/certificaciones.png" alt="">
				<div class="efec-luz-blanca"></div>
			</div>
			<div class="curcergalery">
				<img class="img-cucega" src="imagenes/tattoo-gallery.png" alt="">
				<div class="efec-luz-blanca"></div>
			</div>
		</div>
	</div>

	<!--*****CURSOS CERTIFICACIONES GALLERY*********************************-->


	<!--*****Formulario quienes somos*********************************-->
	<div class="ctn-fomulario">

		<div class="ctn-form">

			<section class="formulario">

				<ul>
					<li class="desplegar">
						<h4>Información</h4>
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
					<li class="desplegar">
						<h4>Mi cuenta</h4>
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
					<li class="desplegar">
						<h4>Información sobre la tienda</h4>

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
								<i class="mail far fa-envelope">
									<h3>E-mail: contacto@tattoostore.com</h3>
								</i>

							</li>

						</ul>
					</li>
				</ul>
			</section>

			<section class="formulario">
				<ul>
					<li class="desplegar">
						<h4>Siguenos en</h4>
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
									<input type="text" name="email" size="18" placeholder="Introduzca su dirección de correo electronico">
									<button type="sumbit"><i class="righ fas fa-chevron-right"></i></button>
								</form>
								<span>
									<h2>Registrece para recibir las últimas noticias y actualizaciones
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
					<img src="imagenes/iconfinder_Emoji.png" alt="">
				</div>
				<div>
					<a href="#">Agujas de cartucho 25%OFF</a>
				</div>
				<div>
					<img src="imagenes/iconfinder_Emoji.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<!--*****Footer Negro*********************************-->
</body>

</html>