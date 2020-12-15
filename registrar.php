<?php 
	include("con_db.php");

if (isset($_POST['register'])) {

	$nombre=$_POST["name"];
	$apellido=$_POST["lastname"];
	$email=$_POST["email"];
	$tel=$_POST["phone"];
	$ropa=$_POST["donationR"];
	$zapatos=$_POST["donationZ"];
	$carrito=$_POST["donationC"];
	$muneca=$_POST["donationM"];
	$boton=$_POST["donationB"];
	$separate="-";
	$donation_value=$ropa.$separate.$zapatos.$separate.$carrito.$separate.$muneca.$separate.$boton;
	$insert_date="INSERT INTO donacioness VALUES ('$nombre','$apellido','$email','$tel','$donation_value')";
	$execute=mysqli_query($conex,$insert_date);
	if(!$execute){
		echo "Error ingresar datos";
	}
}

?>  