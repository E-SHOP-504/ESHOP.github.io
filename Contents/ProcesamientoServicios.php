<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Comprobar datos</title> 
<script src="../Backend/CSS/header.js"></script>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
<link href="../Backend/CSS/productos2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
@import url("../webfonts/Audiowide_Regular/stylesheet.css");
#principal .header2 .wrapper .texto a {
    font-family: Audiowide Regular;
}
#principal .header2 .wrapper .texto a {
    font-family: Audiowide Regular;
}
.header2 .wrapper nav a {
    font-family: Audiowide Regular;
}
</style>
</head>
<body background="img/fondo.jpeg">
	<header class="header2">
		<div class="wrapper">
	      <div class="logo"><img src="img/logo menu1.jpeg" width="200" height="100"></div>
		<nav>
			<a href="inicio.html">Inicio</a>
			<a href="nosotros.html">Sobre Nosotros</a>
			<a href="Productos.html">Productos</a>
			<a href="servicios.html">Servicios</a>
			<a href="redes.html">Contactanos</a>
		</nav>
			</div>
	</header>
<h1>Tus Datos de suscripción: </h1>
<p>Estos son los datos que nos has enviado:</p>
	
<form action="" method="post" enctype="multipart/form-data"
    class="contact_form" accept-charset="UTF-8">
<?php  
echo "Nombre de la computadora: "; echo $_POST['nompc']; echo "<br/>";
echo "Nombre Cliente: "; echo $_POST['nombre']; echo "<br/>";
echo "Tipo de Servicios: "; echo $_POST['servicio']; echo "<br/>";
echo "Descripción "; echo $_POST['descripcion']; echo "<br/>";
echo "Fecha de ingreso: "; echo $_POST['fecha']; echo "<br/>";

?>
		
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
	<p>Los datos son correctos: <input type="submit" name="comprar" ></p>
	<p>Los datos no son correctos: <a href="servicios.php">Volver a escribirlos</a></p>
		
	
</body>
</html>