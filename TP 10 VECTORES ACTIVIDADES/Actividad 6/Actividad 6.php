<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Actividad 6</title>
</head>
<body>
    <?php
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    sort($meses);
    echo "Meses ordenados alfabéticamente:<br>";
    foreach ($meses as $mes) {
        echo $mes . "<br>";
    }
    ?>
</body>
</html>

