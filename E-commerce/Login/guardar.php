<?php
    $link = mysqli_connect("localhost", "root", "", "ecommerce") or die("No se encuentra el servidor");

    $query = "SELECT * FROM data";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Nombre: " . $row['nombre'] . "<br>";
            echo "Apellido paterno: " . $row['apellidop'] . "<br>";
            echo "Apellido materno: " . $row['apellidom'] . "<br>";
            echo "Numero: " . $row['numero'] . "<br>";
            echo "Correo: " . $row['correo'] . "<br><br>";
	    echo "Alias: " . $row['alias'] . "<br><br>";
        }
    } else {
        echo "No hay datos para mostrar.";
    }

    mysqli_close($link);
?>