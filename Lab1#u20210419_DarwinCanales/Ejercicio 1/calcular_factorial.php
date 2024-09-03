<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Obtener el número del formulario
    $numero = $_POST['numero'];

    // Función para calcular el factorial
    function factorial($num) {
        if ($num == 0) {
            return 1;
        } else {
            return $num * factorial($num - 1);
        }
    }

    // Calcular el factorial y mostrarlo
    $resultado = factorial($numero);
    echo "<p>El factorial de $numero es: $resultado</p>";
    ?>
</body>
</html>