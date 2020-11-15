<?php
If(!empty($_POST)){
$serverName = "200.52.145.138"; //serverName\instanceName
$connectionInfo = array( "Database"=>"tienda", "UID"=>"doce", "PWD"=>"Doce123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(isset($_POST['Guardar'])){
		$nombre= trim($_POST['nombre']); 
		$producto = trim($_POST['producto']);
		$direccion = trim($_POST['direccion']);
		$correo= trim($_POST['correo']);
		$telefono= trim($_POST['telefonofijo']);
		$movil= trim($_POST['movil']);	
		$cantidad= trim($_POST['cantidad']);	
		$fecha= date("d/m/yy");
		$observaciones= trim($_POST['descripcion']);
		$domicilio=trim($_POST['domicilio']);

		$consulta= "INSERT into pedidosproduc(nombrecliente, pedidoproduc, direccionproduc, correoproduc, telefonofijoproduc, movilproduc, observacionesproduc, cantidad, fechaingresoproduc, domicilioproduc)values('$nombre','$producto','$direccion','$correo','$telefono','$movil','$observaciones','$cantidad','$fecha','$domicilio')";
		
	$resultado= sqlsrv_prepare($conn, $consulta);

if(sqlsrv_execute($resultado)){
		?>
        <h3 class= "ok">! Agregado correctamente! </h3> 
        <?php
	} else {
		?>
        <h3 class= "malo">! Ha ocurrido un error....</h3>
        <?php
	}
	} else {
		?>
        <h3 class= "malo">! Por favor, complete los campos....</h3>
       <?php
	}
}
?>
