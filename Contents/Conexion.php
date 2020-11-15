<?php
$serverName = "200.52.145.138"; //serverName\instanceName
$connectionInfo = array( "Database"=>"tienda", "UID"=>"doce", "PWD"=>"Doce123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>