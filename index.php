<?php 
session_start();
$_SESSION['detalle'] = array();

require_once 'conexion.php';
require_once 'Producto.php';

$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
 			<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Indicación para que la página se adapte a la escala del navegador-->
			<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Mega Feria Mundo Imperial</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
					 <link rel="shortcut icon" href="imagenes/favicon.png" />

<link href="libs/css/bootstrap.css" rel="stylesheet">
 <script src="libs/js/jquery.js"></script>
    <script src="libs/js/jquery-1.8.3.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libs/ajax.js"></script>
    <link rel="shortcut icon" href="carro.png">
	

    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs/js/alertify/lib/alertify.min.js"></script>

  </head>
<style>
	
	*{
	margin: 0;
	padding: 0;
	border: 0;
	vertical-align: baseline;
	box-sizing: border-box;
}

body{
	background: #FFF;
	font-family: sans-serif;
	padding-top: 100px;
	overflow-y: scroll;
/*	transition: padding-top 0.5s ease;*/
}
/*-------------------------------------------------------AQUÍ COMIENZA EL HEADER--------------------------------------------*/
header{
	width:  100%;
	height: 19%;
	background: #000;
	position: absolute;
	top: 0;
/*	transition: all 0.5s;*/
}

header h1 img{
	position: absolute;
/*	width: 350px;
	height: 110px;*/
	width: 13%;
	height: 48%;
/*	left: 200px;
	top: 25px;*/
	left: 20%;
	top: 12%;
}

header h2{
	font-size: 100%;
	color: white;
	font-family: Roboto Condensed, sans-serif;
	margin-left: 66.5%;
	margin-right: 11%;
	margin-top: -1.75%;
	font-weight: normal;
	line-height: 140%;
}
header h2 img{
	position: absolute;
	width: .70%;
	height: 7%;
	top: 22%;
	right: 34.3%;
}
header h3{
	font-size: 99%;
	color: white;
	font-family: Roboto Condensed, sans-serif;
	margin-left: 66.5%;
	margin-right: 11%;
	margin-top: .2%;
	font-weight: normal;
	line-height: 140%;
}
header h3 img{
	position: absolute;
	width: 1.%;
	height: 9.5%;
	top: 36.5%;
	right: 34%;

}

/*-----------------------------------------------------------AQUÍ COMIENZA EL MENÚ----------------------------------------------*/
header nav{
	position: absolute;
	bottom: 0;
	height: 28%;
	width: 100%;
	background: #77104c;
	text-align: center;
	text-decoration: none;
}

header nav a{
	color: white;
	display: inline-block;
	padding-left: 3%;
	padding-right: 2.5%;
	line-height: 0%;
	text-decoration: none;
	font-family: 'Roboto Condensed', sans-serif;
	font-size: 90%;
	border-right: white 1px dotted;
	padding-top: 1.3%;
	padding-bottom: 1.3%;
	text-decoration: none;
}

header nav a:hover{
	background-color: #261f23;
	transition: .3s;
	text-decoration: none;
	color: white;
}
/*--------------------------------------------------------AQUÍ COMIENZA EL CONTENIDO---------------------------------------------*/
.main-container{
	position: absolute;
	background: white;
	height: 140%;
	width: 65%;
	margin-top:  8.3%;
	margin-left: 18.3%;
	border: #E0E0E0 1px solid;
}
.main-container .img{
	padding-top: 2.5%;
	padding-left: 2.3%;
	width: 97.5%;
	
}
.imgdos{
	padding-top: 2.5%;
	padding-left: 2.3%;
	width: 97.5%;
}
.main-container h3{
	padding: 20px;
	font-family: Roboto Condensed;
}
.main-container p{
	padding: 20px;
	font-family: Roboto Condensed;
	color: #949494;
	font-size: 14px;
	line-height: 25px;
}
.main-container a{
	color: #264269;
	text-decoration: none;
}
/*--------------------------------------------------------AQUÍ COMIENZA EL ASIDE-------------------------------------------------*/
.main-aside{
	position: absolute;
	color: white;
	background: whitesmoke;
	height: 60.3%;
	width: 19.3%;
	margin-top: 8.3%;
	margin-left: 60.5%;
	border: #E0E0E0 1px solid;
}

.tituloaside{
	background: #ff9800;
	height: 60px;
	font-size: 150%;
	padding-top: 4%;
	padding-left: 5%;
	font-weight: bolder;
	font-family: Roboto Condensed;

}
/*--------------------------Carrousel----------------------------------
.orb {
  width: 366px;
  height: 130px;
  background: whitesmoke;
/*  border-radius: 50px;
  display: inline-block;
  color: #414141;
  margin: 2;
  float: left;
  transition: all .3s ease-out;
}
.uno1{ 
	margin: 5%;
	font-size: 16px;
}
.orb:hover {
  transform: scale(.95);
  opacity: .99;
  cursor: pointer;
  background: #ff9800;
}

.red {background:whitesmoke;
color: #414141;} 
.yellow {background:whitesmoke;
color: #414141;}
.blue {background:whitesmoke;
color: #414141;}
.orange {background:whitesmoke;
color: #414141;}
.purple {background:whitesmoke;
color: #414141;}
.green {background:whitesmoke;
color: #414141;}

.marquee {
  height: 505px;
  width: 367px;
  border: 2px solid #eee;
	overflow: hidden;
  box-sizing: border-box;
  position: absolute;
  margin: 0 auto;
}

.marquee--inner {
  display: inline;
  width: 200%;
  margin: 70px 0;
  position: relative;
  animation: marquee 19s linear infinite;
}

.marquee--inner:hover {
  animation-play-state: paused;
}

.half {
  float: left;
  width: 10%;
} */

span {
  float: left;
  width: 0%;
}

@keyframes marquee {
  0% { top: 110%; }
  100% { top: -180%; }
}
/*---------------------------------------------------------AQUÍ COMIENZA EL FOOTER------------------------------------------------*/
.main-footer {
  background-color: black;
  position: absolute;
  bottom: -100%;
  width: 100%;
  height: 17.5%;
  color: white;
}
/*-------------------------------SECCIÓN UNO--------------------------------------*/
.main-footer .footer1 .img1{
	width: 15.1%;
	margin-left: 20%;
	padding-top: -10%;
}
.main-footer .footer1 .img2{
	width: 15.1%;
	margin-left: -.25%;
	padding-top: -10%;
}
.main-footer .footer1 .img3{
	width: 15.1%;
	margin-left: -.25%;
}
.main-footer .footer1 .img4{
	width: 15.1%;
	margin-left: -.25%;
}
/*-------------------------------SECCIÓN DOS--------------------------------------*/
.main-footer .footer2{
	 background-color: #77104c;
  position: absolute;
  bottom: -110%;
  width: 100%;
  height: 111.1%;
}
.main-footer .footer2 .logof1{
	width: 10%;
	margin-left: 20%;
	padding-top: 1.8%;
}
.main-footer .footer2 .logof2{
	width: 10%;
	margin-left: 2.9%;
	padding-top: -10%;
}
.main-footer .footer2 .logof3{
	width: 10%;
	margin-left: 1.9%;
}
.main-footer .footer2 .logof4{
	width: 10%;
	margin-left: 2%;
}
.main-footer .footer2 .logof5{
	width: 10%;
	margin-left: 1.3%;
}
/*-------------------------------SECCIÓN TRES--------------------------------------*/
.main-footer .footer3{
	 background-color: #212121;
  position: absolute;
  bottom: -385.9%;
  width: 100%;
  height: 275.9%;
}
.footer3 h1{
	font-family: "Roboto Condensed", sans-serif;
	font-size: 200%;
	color: #77104c;
	padding-left: 21%;
	padding-top: 2.5%;
	font-weight: normal;

}
/*-------------------------------FORMULARIO-----------------------------------------*/
.formulario{
	margin: 10px auto; 
	width: 22%;
	position: relative; 
	padding:5px;
	background-color: #212121; 
	font-family:Lato, Arial, "Helvetica Neue", Helvetica, sans-serif;
	border: solid .05px;
	padding-bottom: .8%;
	margin-top: 15.3%;
	margin-left: 21%;
}

.campos {
	color: #fff;
	margin: 1px; 
	padding: 8px;  
	letter-spacing: 2px;
	font-size: 0px;
}

.entrada{
	font-size: 15px; 
	color: #999; 
	border: 0;
	width: 75%;
	padding: 9px;
	border-radius: 4px;
	font-family: Roboto Condensed;
}

.enviar{
	padding: 8px; 
	margin-top: -1%; 
	background-color: #CAC9C9; 
	color: white; 
	font-size: 14px; 
	padding-left: 2%;
	padding-right: 2%;
 
	cursor: pointer; 
	border: 0; 
	border-radius: 4px;
	font-family: Roboto Condensed;
}

.enviar:hover {
	background-color:#77104c;
}

.formulario .h11{
	color: red;
	padding-left: 92%;
	font-size: 180%;
	position: absolute;
	margin-top: -19.9%;
}
.logo2{
	width: 79%;
	height: 18%;
	position: absolute;
	padding-left: 65%;
	padding-right: -10%;
}
.main-footer .hr p{
	position: absolute;
	color: #949494;
	padding-left: 20.2%;
	padding-top: 2.5%;
}
.main-footer .hr .hecho p{
	color: #949494;
	font-family: Roboto Condensed;
	font-size: 17px;
	padding-left: 21%;
}

.main-container .ruta1{
	background: whitesmoke;
	margin-top: 20%;
	margin-left: 31.7%;
	margin-right: 51.7%;
	height: 5%;
	box-shadow: 3px 3px 8px #8D8D8D;
	border-radius: 1px;
}
.ruta1:hover{
	  transform: scale(1.1);
  opacity: 1;
  cursor: pointer;
  background: #FFC600;
  transition: .4s ;
  border-radius: 30px;
}
.main-container .ruta2{
	background: whitesmoke;
	margin-top: -6.4%;
	margin-left: 51.7%;
	margin-right: 31.7%;
	height: 5%;
	box-shadow: 3px 3px 8px #8D8D8D;
	border-radius: 1px;
}
.ruta2:hover{
	  transform: scale(1.1);
  opacity: 1;
  cursor: pointer;
  background: #FFC600;
  transition: .4s ;
  border-radius: 30px;
}
</style>
<body>
<!-----------AQUÍ COMIENZA EL HEADER------------------------------------------------------------------->
	<header>
		<div><h1><a href="#"><br><img title="Hola Mundo Imperial" src="imagenes/logo.png"></a></h1>
			<h2><img src="imagenes/tel.png">744.435.17.95 <br></h2>
				<h3><img src="imagenes/sobre3.png">taquilla.forum@mundoimperial.com</h3>
		</div>
<!-----------AQUÍ COMIENZA EL MENÚ--------------------------------------------------------------------->
		<nav>
			<a href="#">CARTELERA</a><a href="#">PAQUETES</a><a href="#">UBÍCANOS</a><a href="#">CONTACTO</a><a href="#">PRENSA</a><a href="#">GALERÍA</a><a href="#">INSTALACIONES</a>
		</nav> 
	</header>
<!-----------AQUÍ COMIENZA EL CONTENIDO---------------------------------------------------------------->
		<div class="main-container">
			 	<div class="container">
			 				<a><img class="banner" style="width: 1237px; margin-left: -50px;" src="imagenes/banner.png"></a>
 		
 		<div class="page-header"> 
			<center><h1 style="padding-bottom: 50px; padding-top: 50px; font-weight: bold;"><font color="white" size="10" style="color:black; font-family: Roboto Condensed;">Venta de boletos</font></h1></center>
		</div>
		<center>
 		<div class="row">


			<div class="col-md-4">	
				<div><font color="white" size="6" style="color:black; font-family: Roboto Condensed;">Fecha de boleto:</font>
				<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
					<option value="0">Seleccione una fecha</option>
					<?php foreach($resultado_producto as $producto):?>
						<option value="<?php echo $producto['id']?>"><?php echo $producto['descripcion']?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>




			<div class="col-md-4">
				<div><font color="white" size="6" style="color:black; font-family: Roboto Condensed;">Cantidad:</font>
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>




			<div class="col-md-1">
				<div style="margin-top: 45px; margin-left: -13px;">
				<button type="button" style="background: #0B1595;" class="btn btn-primary btn-agregar-producto">AGREGAR</button>
				</div>
			</div>
			<div style="padding-left: 100px;"> </div>
			<div class="col-md-1">
				<a href="index.php">
				<div style="margin-top: 45px; padding-left: 0px;">
				<button type="button" class="btn btn-danger ">BORRAR TODO</button>
				</div>
			    </a>
			</div>
			<!--<div class="col-md-1">
				<a href="detalle.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">DETALLES</button>
				</div>
			    </a>
			</div>-->



		</div>
		</center>
		<br>
		<center>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title"><font size="6" face="Roboto Condensed" >BOLETOS</font></h3>
		      </div>
			<div class="panel-body detalle-producto">
				<?php if(count($_SESSION['detalle'])>0){?>
					<table class="table">
					    <thead>
					        <tr>
					            <th>Descripci&oacute;n</th>
					            <th>Cantidad</th>
					            <th>Precio</th>
					            <th>Subtotal</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><?php echo $detalle['precio'];?></td>
					            <td><?php echo $detalle['subtotal'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"><font size="3" face="Roboto Condensed" > No hay boletos agregados </font></div>
				<?php }?>
			</div>
		</div>
	</center>
 	</div>
 	<center>
 	<div class="col-md-12">
				<a href="detalle2.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-success "><font size="8" face="Roboto Condensed">COMPRAR</font></button>
				</div>
			    </a>
			</div>
	</center>		
				<a href="Megaferia/indexcartelera.html"><h3 class="ruta1" align="center">Ver cartelera</h3></a>
				<a href="Megaferia/index.html"><h3 class="ruta2" align="center">Regresar al inicio</h3></a><br>
		</div>


<!-----------AQUÍ COMIENZA EL ASIDE--------------------------------------------------------------------
		<div class="main-aside">
			<aside class="main-container_aside">
				<div class="tituloaside">Últimos Posts</div>
<div class="marquee">
  <div class="marquee--inner">
    <span>
      <div class="orb"><p align="justify" class="uno1">Título de anuncio 1 <br><br>   Texto de anuncio número 1, que seas bienvenida/o.</p></div>
      	<div class="orb red"><p align="justify" class="uno1">Título de anuncio 2 <br><br>   Texto de anuncio número 1, que seas bienvenida/o.</p></div>
      		<div class="orb yellow"><p align="justify" class="uno1">Título de anuncio 3 <br><br>   Texto de anuncio número 1, que seas bienvenida/o.</p></div>
      			<div class="orb blue"><p align="justify" class="uno1">Título de anuncio 4 <br><br>   Texto de anuncio número 1, que seas bienvenida/o.</p></div>
      				<div class="orb orange"><p align="justify" class="uno1">Título de anuncio 5 <br><br>   Texto de anuncio número 1, que seas bienvenida/o.</p></div>
      					<div class="orb purple"><p align="justify" class="uno1"> Título de anuncio 6 <br><br>   Texto de anuncio número 1, que seas bienvenida/o.</p></div>
      						<div class="orb green"><p align="justify" class="uno1">Título de anuncio 7 <br><br>   Texto de anuncio número 1, que seas bienvenida/o.</p></div>
    </span>
  </div>-->
</div>
			</aside>
		</div>
<!-----------AQUÍ COMIENZA EL FOOTER------------------------------------------------------------------->
	<footer class="main-footer">
				<div class="footer1">
					<a href="#"><img class="img1" src="imagenes/princess.png"></a>
						<a href="#"><img class="img2" src="imagenes/pierre.png"></a>
							<a href="#"><img class="img3" src="imagenes/palacio.png"></a>
								<a href="#"><img class="img4" src="imagenes/expo.png"></a>
				</div>
				<div class="footer2">
					<img class="logof1" src="imagenes/logo_footer1.png">
						<img class="logof2" src="imagenes/logo_footer2.png">
							<img class="logof3" src="imagenes/logo_footer3.png">
								<img class="logof4" src="imagenes/logo_footer4.png">
									<img class="logof5" src="imagenes/logo_footer5.png">
				</div>
				<div class="footer3">
					<h1>SUSCRÍBETE A NUESTRO BOLETÍN</h1><a href="#"><img class="logo2" src="imagenes/logo2.png"></a>
				</div>
				<form class="formulario">
						<div class="campos">
 							 <p><label class="etiqueta" for="subscriber_email"><abbr title="Requerido"> </abbr></label></p><input class="entrada" type="email" name="subscriber[email]" id="subscriber_email" placeholder="Email"><h1 class="h11">*</h1>
 						</div>
								<div class="campos">
									<input type="submit" name="commit" value="Enviar" class="enviar" data-disable-with="Procesando">
								</div>
								<h1 class="h11">*</h1>
				</form>
				<div class="hr">
					<p>______________________________________________________________________________________________________________________________</p>
						<div class="hecho"><p> <br><br><br>Hecho por P </p></div>
				</div>

	</footer>
</body>

</html>
