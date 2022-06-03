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

</head>

<body style="background-color: #000;">


	<?php
	error_reporting(0); // En el inicio de sesion quitar el error que dice variable de sesion no existe.
	?>

	<nav>

		<ul>





			<a href="mostrarCarrito.php">CARRITO(<?php

													/*empty vacio si el carrito esta vacio el operador ternario ?el 
				primer valor es si 0: el segundo valor es no // la funcion count= contar
                la cantidad de productos agregados*/
													echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);

													?>)
			</a>



			<!--Mostrar el usario logueado-->

			<li><a href="formValidarsesion.php">iniciar sesion</i>
				</a></li>

			<li><a>
					<h2><?php echo $_SESSION['user'] ?></h2>
				</a></li>
			<li><a href="cerrarsesion.php">Cerrar sesion</a></li>


		</ul>

	</nav>

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

			<div>
				<!-- Llama los datos marca nombre y precio-->
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

</body>

</html>