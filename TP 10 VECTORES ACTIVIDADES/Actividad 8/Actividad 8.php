<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Actividad 8</title>
</head>
<body>
    <?php
    $dias_mes = array(
        "Enero" => 31,
        "Febrero" => 28,
        "Marzo" => 31,
        "Abril" => 30,
        "Mayo" => 31,
        "Junio" => 30,
        "Julio" => 31,
        "Agosto" => 31,
        "Septiembre" => 30,
        "Octubre" => 31,
        "Noviembre" => 30,
        "Diciembre" => 31
    );
    foreach ($dias_mes as $mes => $dias) {
        echo "El mes de $mes tiene $dias días.<br>";
    }
    ?>
</body>
</html>
