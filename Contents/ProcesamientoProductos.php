<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Comprobar datos</title> 
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
 <form action="almacen.php" method="post" enctype="multipart/form-data"
    class="contact_form" accept-charset="UTF-8">

	
<?php  

echo "Nombre Cliente: "; echo $_POST['nombre']; echo "<br/>";
echo "Producto Requerido: "; echo $_POST['producto']; echo "<br/>";
echo "Direeción: "; echo $_POST['direccion']; echo "<br/>";
echo "Correo Electronico: "; echo $_POST['correo']; echo "<br/>";
echo "Teléfono Fijo: "; echo $_POST['telefonofijo']; echo "<br/>";
echo "Teléfono Movil: "; echo $_POST['movil']; echo "<br/>";
echo "Descripción "; echo $_POST['descripcion']; echo "<br/>";
echo "Cantidad: "; echo $_POST['cantidad']; echo "<br/>";
echo "Fecha del pedido: "; echo $_POST['fecha']; echo "<br/>";
echo "Servicio a Domicilio: "; echo $_POST['domicilio']; echo "<br/>";
echo "Foto: "; echo $_POST['']; echo "<br/>";
echo "El total a pagar es: L. $total "; 

	 
?>
		
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
	<p>Los datos son correctos: <input type="submit" name="comprar" ></a></p>
	<p>Si los datos no son correctos: <a href="Productos.php">Volver a escribirlos</a></p>
	   


</body>
</html>