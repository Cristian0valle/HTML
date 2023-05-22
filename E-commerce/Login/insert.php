<?php
	$link = mysqli_connect("localhost", "root", "", "ecommerce") or die("<h2>No se encuentra el servidor</h2>");

	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	$numero = $_POST['numero'];
	$correo = $_POST['correo'];
	$alias = $_POST['alias'];

	$req = (strlen($nombre) * strlen($apellidop) * strlen($apellidom) * strlen($numero) * strlen($correo) * strlen($alias)) or die("No se han llenado todos los campos");

	$query = "INSERT INTO data (nombre, apellidop, apellidom, numero, correo, alias) VALUES ('$nombre', '$apellidop', '$apellidom', '$numero', '$correo', '$alias')";
	mysqli_query($link, $query) or die("<h2>Error guardando los datos</h2>");

	echo $nombre . "<b> es su nombre. </b> <br>";
	echo $apellidop . "<b> es su apellido paterno. </b> <br>";
	echo $apellidom . "<b> es su apellido materno. </b> <br>";
	echo $numero . "<b> es su numero. </b> <br>";
	echo $correo . "<b> es su correo. </b> <br>";
	echo $alias . "<b> es su alias. </b> <br>";

	mysqli_close($link);
?>