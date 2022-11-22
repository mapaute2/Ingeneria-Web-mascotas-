<?php

	include("../dll/conexion.php");

	//extraxt($_Post);
	$idPersonal=$_POST['idPersonal'];

	$sql="delet from personal where id=$idPersonal";

	$resSql=mysqli_query($conexion, $sql);
	if($resSql){
		echo  '<scrip>alest("Sus datos se eleminaron correctamente");</scrip>';
	}else{
		echo "Fallo en mysql";
	}

?> 			