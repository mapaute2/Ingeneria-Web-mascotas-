<?php
	$conexion= new mysqli("127.0.0.1","root","","pets");
	if($conexion -> connect_errno){
		echo "Hay problema de conexion";
	}
?>

