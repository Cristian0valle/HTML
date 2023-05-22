<?php
    $link = mysqli_connect("localhost", "admin", "admin", "aiep") or die("No se encuentra el servidor");

    $query = "SELECT * FROM alumno";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "RUT: " . $row['rut'] . "<br>";
            echo "Nombre: " . $row['nombre'] . "<br>";
            echo "Apellido: " . $row['apellido'] . "<br>";
            echo "Teléfono: " . $row['telefono'] . "<br>";
            echo "Dirección: " . $row['direccion'] . "<br><br>";
        }
    } else {
        echo "No hay datos para mostrar.";
    }

    mysqli_close($link);
?>