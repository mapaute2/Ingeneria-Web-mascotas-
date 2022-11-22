<?php
	//echo "<strong>".@$nombres."</strong> ".$apellidos;
	//echo "<hr>";
	//echo $telefono;

	include("../dll/conexion.php");
	include("../dll/class_mysql.php");
	$miconexion= new class_mysqli();
	$miconexion->conectar(DBHOST,DBUSER,DBPASS,DBNAME);

	//extraxt($_Post);
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$telefono=$_POST['telefono'];
	$cedula=$_POST['cedula'];
	$fechanacimiento=$_POST['fechanacimiento'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];

	$sql="insert into personal values('','$nombres','$apellidos','$correo','$telefono','$fechanacimiento','$cedula','direccion')";
	
	$resSql=$miconexion->consulta($sql);


	//$sql="delete from personal where id=3";
	//$sql="update personal set nombre='Maria',apellidos='Eras' where id=1";

	$resSql=mysqli_query($conexion, $sql);
	if($resSql){
		echo "Sus datos se registraron correctamente";
	}else{
		echo "Fallo en mysql";
	}


?> 			