<!DOCTYPE html>
<html>

<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<div class="container">
		<form id="contact" action="" method="post">
			<h3>DONACIONES!!!</h3>
			<h4>Llenar formulario para donar!</h4>
			<fieldset>
				<input placeholder="Nombre" name="name" type="text" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="Apellido" name="lastname" type="text" tabindex="2" required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="Email" name="email" type="email" tabindex="3" required>
			</fieldset>
			<fieldset>
				<input placeholder="Ingrese tu numero de telefono" type="tel" name="phone" tabindex="4" required>
			</fieldset>
			<fieldset>

				<legend>Que vas a Donar</legend>
				<input type="checkbox" name="donationR" value="ropa">Ropa<br>
				<input type="checkbox" name="donationZ" value="zapatos">Zapatos<br>
				<input type="checkbox" name="donationC" value="carrito">Carrito<br>
				<input type="checkbox" name="donationM" value="muñeca">Muñeca<br>
				<input type="checkbox" name="donationB" value="boton">Botón<br>



			</fieldset>
			<fieldset>
				<button type="submit" id="contact-submit" name="register" data-submit="...Sending">Donar</button>
			</fieldset>
			<fieldset>
				<a href="donaciones.php" id="table-donation" role="button">Donaciones</a>
			</fieldset>


		</form>
	</div>
	<?php 
	include("regitrar.php")
	
	
		
        ?>
</body>

</html>