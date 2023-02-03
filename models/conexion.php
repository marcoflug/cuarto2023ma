<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="uta_estudiantes";
	$mysqli= new mysqli($servername,$username,$password,$dbname);
	$conn= mysqli_connect($servername,$username,$password,$dbname);


	if ($mysqli->connect_errno) {
		die("Error en la conexion".mysqli_connect_error());
	}
?>