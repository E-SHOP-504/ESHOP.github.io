<?php
If(!empty($_POST)){
$serverName = "200.52.145.138"; //serverName\instanceName
$connectionInfo = array( "Database"=>"tienda", "UID"=>"doce", "PWD"=>"Doce123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(isset($_POST['Guardar'])){
		$nombrepc= trim($_POST['nompc']); 
		$nombrecliente= trim($_POST['nombre']); 
		$direccionpc= trim($_POST['direccionpc']);
		$correopc= trim($_POST['correopc']);
		$telefonofijopc= trim($_POST['telefonofijopc']);
		$movilpc= trim($_POST['movilpc']);
		$observaciones= trim($_POST['observaciones']);
		$servicio= trim($_POST['servicio']); 
		$fecha= date("d/m/yy");
		$domicilio=trim($_POST['domicilio']);
	

		$consulta= "INSERT into pedidospc(nombrepc, nombreclientepc, direccionpc, correopc, telefonopc, movilpc, tiposervicio, observacionespc, fechaingresopc, domiciliopc)values('$nombrepc','$nombrecliente','$direccionpc','$correopc','$telefonofijopc','$movilpc','$observaciones','$servicio','$fecha','$domicilio')";
		
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

