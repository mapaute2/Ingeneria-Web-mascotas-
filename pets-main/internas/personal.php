
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"><!-- ../ se utiliza para salir de una carpeta-->
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="internas/borrar.php">Borrar Personal</a>
			<a href="adopcion.php">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
		<h2>Listado Personal</h2>
		<?php
		include("../dll/conexion.php");
		include("../dll/class_mysql.php");
		$miconexion= new class_mysqli();
		$miconexion->conectar(DBHOST,DBUSER,DBPASS,DBNAME);
		$miconexion ->consulta("select id, nombre, apellidos from personal");
		$miconexion ->verconsulta();
		?>
	</main>
 
	<section class="sponsor">
		<img src="../images/logotipoPet.png">
		<img src="../images/logo_blanco_utpl.png">
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales"> <!--se usa en menu-->
			<a href="#"><i class="fa-brands fa-facebook"></i></a> 
			<a href="#"><i class="fa-brands fa-instagram"></i></a>
			<a href="#"><i class="fa-brands fa-twitter"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>
