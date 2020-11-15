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
	
}?></strong>
