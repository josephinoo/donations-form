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
				<input placeholder="Nombre" name="name" type="text" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="Apellido" name="lastname" type="text" tabindex="2" required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="Email" name="email" type="email" tabindex="3" required>
			</fieldset>
			<fieldset>
				<input placeholder="Ingrese tu numero de telefono" type="tel" name ="phone" tabindex="4" required>
			</fieldset>
			<fieldset>

				<legend>Que vas a Donar</legend>
				<input type="checkbox" name="donationR" value="Cats">Ropa<br>
				<input type="checkbox" name="donationZ" value="Dogs">Zapatos<br>
				<input type="checkbox" name="donationC" value="Birds">Carrito<br>
				<input type="checkbox" name="donationM" value="Birds">Muñeca<br>
				<input type="checkbox" name="donationB" value="Birds">Botón<br>



			</fieldset>
			<fieldset>
				<button	 type="submit" id="contact-submit" name="register"data-submit="...Sending">Donar</button>
			</fieldset>
			<fieldset>
				<a href="URL" id="table-donation" role="button">Donaciones</a>
			</fieldset>


		</form>
	</div>
	<?php 
		include("con_db.php");

if (isset($_POST['register'])) {

	 
	    	
	    
   
    
}
	
	
		
        ?>
</body>

</html>