<!DOCTYPE html>
<html>

<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<div class="container">
		<form id="contact" action="" method="post">
			<h3>DONACIONES!!!</h3>
			<h4>Llenar formulario para donar!</h4>
			<fieldset>
				<input placeholder="Nombre" type="text" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="Apellido" type="text" tabindex="2" required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="Email" type="email" tabindex="3" required>
			</fieldset>
			<fieldset>
				<input placeholder="Ingrese tu numero de telefono" type="tel" tabindex="4" required>
			</fieldset>
			<fieldset>
		
					<legend>Que vas a Donar</legend>
					<input type="checkbox" name="donation" value="Cats">Ropa<br>
					<input type="checkbox" name="donation" value="Dogs">Zapatos<br>
					<input type="checkbox" name="donation" value="Birds">Carrito<br>
					<input type="checkbox" name="donation" value="Birds">Muñeca<br>
					<input type="checkbox" name="donation" value="Birds">Botón<br>
					
					
				
			</fieldset>
			<fieldset>
				<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Donar</button>
			</fieldset>


		</form>
	</div>
	<?php 
        include("registrar.php");
        ?>
</body>

</html>