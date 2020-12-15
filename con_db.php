<?php

$conex = mysqli_connect("127.0.0.1","root","password","donaciones"); 
if($conex === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

