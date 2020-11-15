<!DOCTYPE HTML>
<html lang="es";

<head>
<script src="../Backend/CSS/header.js"></script>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
    <meta http-equiv="Content-Type" content="text/html", charset="utf-8"/>
    <title> Productos </title>
    <link href="../Backend/CSS/productos2.css" rel="stylesheet" type="text/css">
</head>
    
    <body background="img/fondo.jpeg">
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

<body>
		<div id="principal">
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
    <?php include("");	?>
    
    <H1 style="text-align:center">Servicios|E-SHOP</h1>
    
    <form action="" method="post" enctype="multipart/form-data"
    class="contact_form" accept-charset="UTF-8">
    
    
   
     
     <label for="nompc"> Nombre de computadora: </label>
     <input name="nompc" type="text" required id="nomproducto"/>
     <br>
     
     
    <br>
     <label for="nombre"> Nombre del Cliente: </label><br>
     <input name="nombre" type="text" required id="nomcliente"/>
     <br>

          <br>
                                
                          <br>
    <label for="direccionpc"> Dirección: </label>
     <input name="direccionpc" type="text" id="unidades"/>
     <br>
    <br>
    <label for="correopc"> Correo Electronico: </label>
     <input name="correopc" type="text" id="unidades"/>
     <br>
    <br>
    <label for="telefonofijopc"> Teléfono Fijo: </label>
     <input name="telefonofijopc" type="text" id="unidades"/>
     <br>
    <br>
    <label for="movilpc"> Teléfono Movil: </label>
     <input name="movilpc" type="text" id="unidades"/>
     <br>
    <br>
															  
											    <br>
     <label for="observaciones"> Observaciones: </label>
     <input name="observaciones" type="text" id="unidades"/>
     <br>
													 
													 <br>
     <label for="servicio"> Tipo de Servicio: </label>
     <input name="servicio" type="text" id="unidades"/>
     <br>
     
     
     <br>
     <label for="fecha"> Fecha de ingreso: </label>
     <input name="fecha" type="date" required id="precio" step="any"/>
     <br>
     <br>
		
  			
		<div class="uno" align="center">
		    <br>
		   <tr>
   <td>
   Servicio A Domicilio:</br>
  <input type="radio" name="domicilio" value="si" checked="checked">
     <br>SI<br>
  <input type="radio" name="domicilio" value="no" checked="checked">
     NO<br/>
   </td></div>
			<br>
			<br>
				<div class="uno">
			<br>
     <?php
if(isset($_POST["submit"])){
	
$checkbox = $_POST["producto"];
	
$suma = 0;
	
	
if(count($checkbox) > 0){
	
foreach($checkbox as $valor){
		
$suma += $valor;
$impuesto = $suma*0.15;
$total= $suma+$impuesto;			
		
}
	
}?>		
<strong><?php
	echo "El Subtotal es: L. $suma. <br>";
echo "El Impuesto es: L. $impuesto. <br> ";
echo "____________________________________<br>";
echo "El total a pagar es: L. $total.";
	
	
}?></strong></div>

     
     <br>
    <!--- <input type="file" id="files" name="files[]" />
     <center><output id="list"></output></center>--->
    
     <br>
     
							  	<input type="submit" name="Guardar" >
     
     <br>
<br>                                
    <p><strong>Asegurese de escribir bien sus datos</p>
    <p>Si los datos no son correctos: <a href="Productos.html">Volver a escribirlos</a></strong></p><br>
    <h4><strong>EN CASO DE REPARACIÓN ENVIAR LA IMAGEN DE SU COMPUTADOR A NUESTRO:<a href="mailto:tiendaeshop504@gmail.com">CORREO ELECTRONICO</a></h4></strong>

    <!-- <script>
           function archivo(evt) {
                  var files = evt.target.files; // Objeto de lista de archivo
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    
                    //Validación solo para permitir imagenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
             
           
                    var reader = new FileReader();
             
       
                    reader.onload = (function(theFile) {
                        return function(e) {
                          
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);--->
     

     </script>
     </form>
     <?php
    include("almacenpc.php");
    ?>
     </body>
     </html>