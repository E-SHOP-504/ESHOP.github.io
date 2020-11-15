<!DOCTYPE HTML>
<html lang="es";

<head>
    <meta http-equiv="Content-Type" content="text/html", charset="utf-8"/>
    <title> Productos </title>
    <link href="../Backend/CSS/productos2.css" rel="stylesheet" type="text/css">
</head>
    <body  background="img/fondo.jpeg">
		
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
 
    <H1 style="text-align:center">Productos|E-SHOP</h1>
    
    <form action="" method="post" enctype="multipart/form-data"
    class="contact_form" accept-charset="UTF-8">
    
     
     <label for="nombre"> Nombre del Cliente: </label><br>
     <input name="nombre" type="text"   required id="nomcliente"/>
     <br>
															  <br>
			 <label for="producto"> Producto Requerido: </label><br>
     <input name="producto" type="text" required id="nomcliente"/>
     <br>
															  
											    <br>
		<label for="direccion"> Dirección: </label>
     <input name="direccion" type="text" id="unidades"/>
     <br>
		<br>
		<label for="correo"> Correo Electronico: </label>
     <input name="correo" type="text" id="unidades"/>
     <br>
		<br>
		<label for="telefonofijo"> Teléfono Fijo: </label>
     <input name="telefonofijo" type="text" id="unidades"/>
     <br>
		<br>
		<label for="movil"> Teléfono Movil: </label>
     <input name="movil" type="text" id="unidades"/>
     <br>
		<br>
     
		<label for="cantidad"> Cantidad: </label>
     <input name="cantidad" type="number" id="unidades"/>
		
		
     <br>
     <label for="fecha"> Fecha del pedido: </label>
     <input name="fecha" type="date" required id="precio" step="any"/>
     <br>
     <br>
			<label for="descripcion"> Descripción: </label><br>
<textarea name="descripcion" maxlenght=400  rows="5" cols="50">  </textarea>     <br>
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
			
		<div class="uno">
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
echo "El total a pagar es: L. $total "; 
	
}?></strong></div> 
     
     
   <!---  <input type="file" id="files" name="files[]" />
     <center><output id="list"></output></center--->    <br>
  
     
							  	<input type="submit" name="Guardar" ><br>
	<br>															  
    <p><strong>Asegurese de escribir bien sus datos</p>
    <p>Si los datos no son correctos: <a href="Productos.html">Volver a escribirlos</a></strong></p><br>
    <h4><strong>SI DESEA INCLUIR UNA IMAGEN A SU GUSTO PUEDE COMPARTIRNOSLA MEDIANTE NUESTRO:<a href="mailto:tiendaeshop504@gmail.com">CORREO ELECTRONICO</a></h4></strong>

     
     <!---<script>
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
    include("almacen.php");
    ?>
     </section>
     </body>
     </html>