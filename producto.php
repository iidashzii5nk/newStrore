<?php 
   session_start();
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


	<script src="https://kit.fontawesome.com/def3cb64a1.js" crossorigin="anonymous"></script><!--FotAwesome-->

  

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script><!--Es un CDN para poder hacer que funcione el jquery menu.js-->


     
     <script src="js/fot.js"></script>



</head>
<body>
<?php include("layauts/_main-header.php"); ?>
  <div class="main-content">
		<div class="content-page">
				<section>
				<div class="part1">
					<img id="idimg" src="imagenes/intenze-ta.jpg">
				</div>
				<div class="part2">
					<h2 id="idtitle">NOMBRE PRINCIPAL</h2>
					<h1 id="idprice">S/. 35.<span>99</span></h1>
					<h3 id="iddescription">Description del producto</h3>
					<button onclick="iniciar_compra()">Comprar</button>
				</div>
			</section>
  	<div class="title-section">Productos destacados</div>
			<div class="products-list" id="space-list">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
		var p='<?php echo $_GET["p"]; ?>';
	</script>
<script type="text/javascript">
$(document).ready(function(){
	$.ajax({
		url:'servicios/producto/get_all_products.php',
		type:'POST',
		data:{},
		success:function(data){
			console.log(data);
			let html='';
			for (var i = 0; i < data.datos.length; i++) {
				if (data.datos[i].codpro==p) {
					document.getElementById("idimg").src="imagenes/"+data.datos[i].rutimapro;

					document.getElementById("idtitle").innerHTML=data.datos[i].nompro;

					document.getElementById("idprice").innerHTML=formato_precio(data.datos[i].prepro);

					document.getElementById("iddescription").innerHTML=data.datos[i].despro;
				}
			html+=
			'<div class="product-box">'+
					'<a href="producto.php?p='+data.datos[i].codpro+'">'+
						'<div class="product">'+
							'<img src="imagenes/'+data.datos[i].rutimapro+'">'+
							 '<div class="detail-title">'+data.datos[i].nompro+'</div>'+
							
					'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
				'</div>'+
		 '</a>'+
	'</div>';
					}
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function formato_precio(valor){
			//10.99
	       let svalor=valor.toString();
	       let array=svalor.split(".");
	       return "S/. "+array[0]+".<span>"+array[1]+"</span>";
		}
		function iniciar_compra(){
			$.ajax({
		url:'servicios/compra/validar_inicio_compra.php',
		type:'POST',
		data:{
		    codpro:p
		},
		success:function(data){
			console.log(data);
			if (data.state) {
                alert(data.detail); 
			}else{
				alert(data.detail);
				if (data.open_login) {
				open_login();
			}
			}
			
		},
		error:function(err){
					console.error(err);
				}
			});
		}
		function open_login(){
			window.location.href="login.php";
		}
	</script>	




<!--*****Formulario quienes somos*********************************-->
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

</body>
</html>