
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
			<a href="#">Servicios</a>
			<a href="#">Productos</a>
			<a href="adopcion.php">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
		<h2>Formulario de adopcion</h2>
		<form method="post" action="procesar.php"> <!--seguridad de datos-->
			<div class="grupoInput">
				<label for="nombres">Nombres <span class="alerta">*</label> <!--el for sirve para ligar, se coloca el mismo nombre-->
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required>
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos <span class="alerta">*</label> <!--el for sirve para ligar, se coloca el mismo nombre-->
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos "required>
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label> <!--el for sirve para ligar, se coloca el mismo nombre-->
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="telefono">Telefono <span class="alerta">*</span></label> <!--el span para mostrar al usuario que es obligatorio con el *-->
				<input type="number" name="telefono" id="telefono" placeholder="Ingrese su telefono"required><!--hacer un campo obligatorio-->
			</div>
			<div class="grupoInput">
				<label for="direccion">Direccion</label> <!--el for sirve para ligar, se coloca el mismo nombre-->
				<input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
			</div>
			<div class="grupoInput">
				<label for="date">Fecha nacimiento</label> <!--el for sirve para ligar, se coloca el mismo nombre-->
				<input type="date" name="date" id="date" placeholder="Ingrese su fecha de nacimiento">
			</div>
			<div class="centrado"><!--para centrar del 100 agregar un div-->
				<button class="boton" type="submit">Guardar</button>
			</div>
		</form>
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
