<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Actividad 5</title>
</head>
<body>
    <?php
    $jugador = array("González", "Pérez", "Rodríguez", "López", "Martínez");
    $frase = "La alineación del equipo está compuesta por: ";
    for ($i = 0; $i < count($jugador); $i++) {
        $frase .= $jugador[$i];
        if ($i < count($jugador) - 1) {
            $frase .= ", ";
        }
    }
    echo $frase . ".<br>";
    ?>
</body>
</html>
